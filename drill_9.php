
<!-- ドリル_Ruby問題 9 繰り返し処理
問題.Ruby→PHPへの書き替え
1〜10までの数値を順番に足し合わせて、
最後に全て足した結果をターミナルに出力するプログラムを書いてください。
条件：必ずtimes文を使ってください。以下のようなプログラムはNGです。
NGなプログラムの例
sum = 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10 -->

<?php

  // PHPにRubyのtimesメソッドと同等のものがない為for文にて対応
  $sum = 0;
  for($i = 1; $i <= 10; $i++)
  {
    $sum += $i;
  }
  print $sum;

?>