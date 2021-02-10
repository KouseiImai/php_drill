<!-- ドリル_Ruby問題 20 検索問題
問題.1
任意の文字列に"code"が、左から何文字目に出てくるかを返し、
その数を出力するメソッドを作りましょう。
出力例：
count_code("codexxcode") → 1
count_code("aaacodebbb") → 4
count_code("cozexxcode") → 7
ヒント: indexメソッドを使用しましょう
 index
indexメソッドは、文字列や配列の中に指定した文字列が含まれていた場合、
その文字列の開始位置を整数の値で返します。
indexメソッドの詳細は公式リファレンスを確認しましょう。
str.index(検索したい文字列, [検索を開始する位置]) -->

<?php

  function count_code($string)
  {
    $str_position =strpos($string, "code");
    print ($str_position + 1). "\n";
  }

  count_code("codexxcode");
  count_code("aaacodebbb");
  count_code("cozexxcode");

?>
