<!-- ドリル_Ruby問題 12 条件分岐
問題.Ruby→PHPへの書き替え
ターミナルから数字を入力して、数字に応じて以下のように出力するプログラムを書いてください。
10以下なら10以下の数字です
10より大きい数値なら10より大きい数字です
10以下でかつ0以下なら0以下の数字です
 -->

<?php

  function check_number($input)
  {
    if($input <= 10 && $input <= 0)
    {
      print "0以下の数字です". "\n";
    }
    elseif($input <= 10)
    {
      print "10以下の数字です". "\n";
    }
    else
    {
      print "10より大きい数字です". "\n";
    }
  }

  print "数字を入力してください". "\n";
  $input = fgets(STDIN);
  check_number($input)
?>