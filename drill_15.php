<!-- ドリル_Ruby問題 15 繰り返し処理のプログラム作成
問題.Ruby→PHPへの書き替え
ユーザーに数字を入力してもらい、
その数の回数だけHello!と表示させるコードを記述してください。
雛形
def output()
end

puts "何回表示させますか？"
output() -->

<?php

  function output($times)
  {
    for($i = 1; $i <= $times; $i++)
    {
      print "Hello!". "\n";
    }
  }

  print "何回表示させますか?". "\n";
  $times = fgets(STDIN);
  output($times);
?>