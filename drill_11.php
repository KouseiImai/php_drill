<!-- ドリル_Ruby問題 11 rubyのAPI問題
問題.Ruby→PHPへ書き替え
名前を入力する機能を作成しましょう。
名前以外にピリオド(.)や空白があるとエラーを表示させます。
出力例：
登録したい名前を入力してください(例)YamadaTaro
YamadaTaro → 登録が完了しました
Yamada.Taro→!エラー!記号は登録できません
Yamada Taro → !エラー!空白は登録できません

ヒント
include?メソッドを使いましょう。
include?
include?メソッドは指定した要素が、配列や文字列内に含まれているかを判定するメソッドです。
include?メソッドの詳細は公式リファレンスを確認しましょう。
Arrayのinclude?メソッドを使用する場合
Stringのinclude?メソッドを使用する場合
array = ["foo", "bar"]
puts array.include?("bar")
# => true
puts array.include?("hoge")
# => false -->

<?php

  function check_name($name)
  {
    if(strpbrk($name, '.'))
    {
      print "!エラー!記号は登録できません". "\n";
    }elseif(strpbrk($name, ' '))
    {
      print "!エラー!空白は登録できません". "\n";
    }else
    {
      print "登録が完了しました". "\n";
    }
  }


  print "登録したい名前を入力してください". "\n";
  $name = fgets(STDIN);
  check_name($name);

?>