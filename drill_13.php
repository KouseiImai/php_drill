<!-- ドリル_Ruby問題 13 eachの入れ子
問題.Ruby→PHPへの書き替え
以下のように、果物の名前と値段が入った配列があります。
この配列を用いて、果物の名前とそれぞれの合計額が出力される
コードを記述してください。
fruits_price = [["apple", [200, 250, 220]], ["orange", [100, 120, 80]], ["melon", [1200, 1500]]]
（出力）
appleの合計金額は670円です
orangeの合計金額は300円です
melonの合計金額は2700円です -->

<?php

  $fruits_price = [['apple', [200, 250, 220]], ['orange', [100, 120, 80]], ['melon', [1200, 1500]]];


  foreach($fruits_price as $fruits)
  {
    $price_calc = 0;
    foreach($fruits[1] as $price)
    {
      $price_calc += $price;
    }
    print $fruits[0]. "の合計金額は" .$price_calc. "円です". "\n";
  }

?>