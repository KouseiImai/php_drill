<!-- ドリル_Ruby問題 42 引数を使いこなそう
問題
ユーザーが数字を2つ渡すと、それらを掛け算した結果を返すプログラムを作ってください。
定義する変数
2つの数字を、それぞれnum1, num2という変数にgetsメソッドを利用して定義してください。
実行結果の例
#デスクトップに移動
$cd Desktop
#Rubyファイルを実行
$ruby argument_test.rb
最初の数字を入力してください
5
2番目の数字を入力してください
6
5と6をかけた答えは30です！ -->

<?php

  function multiply($num1, $num2)
  {
    $calc = $num1 * $num2;
    print rtrim($num1)."と".rtrim($num2)."をかけた答えは".$calc."です!"."\n";
  }

  print "最初の数字を入力してください"."\n";
  $num1 = (int)fgets(STDIN);
  print "2番目の数字を入力してください"."\n";
  $num2 = (int)fgets(STDIN);

  multiply($num1, $num2);
?>