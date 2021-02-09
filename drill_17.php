<!-- ドリル_Ruby問題 17 rubyのAPI問題
問題.1
任意の文字に対してn番目の文字を消し、
その消した文字を出力するメソッドを作りましょう。

呼び出し方
missing_char(string, num)

出力例：
missing_char('kitten', 1) → 'itten'
missing_char('kitten', 2) → 'ktten'

ヒント
sliceメソッドを使用しましょう。
 slice
sliceメソッドを用いることで、配列や文字列から指定した要素を取り出すことができます。
文字列の要素を指定する際は数字を用い、先頭の文字列は0からカウントされます。
# 文字列を作成
string = "abcdefg"

# 文字列から引数で指定した要素を取得して変数に代入
str = string.slice(2)

# strに代入した文字列を出力
puts str
#=> "c"

# 文字列はもとのまま
puts string
#=> "abcdefg"
 slice!
末尾にエクスクラメーションマーク(!)のつくメソッドを破壊的メソッドといいます。
これはもとの配列や文字列を変化させるメソッドです。slice!メソッドを使用することで、
指定した要素を削除することができます。
slice!メソッドの詳細は公式ドキュメントを確認しましょう。
string = "abcdefg"
str = string.slice!(2)
puts str
#=> "c"
# "c"が取り除かれている
puts string
#=> "abdefg" -->


<?php

  function missing_char($string, $num)
  {
    $get_character1 = substr($string, ($num - 1), 1);
    $get_character2 = substr($string, $num, 1);
    $first_half_string = strstr($string, $get_character1, true);
    $latter_half_string = strstr($string, $get_character2, false);
    print $first_half_string. $latter_half_string. "\n";
  }


  missing_char('kitten', 1);
  missing_char('kitten', 2);
 
?>