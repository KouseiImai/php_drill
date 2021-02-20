<!-- ドリル_Ruby問題 37 rubyのAPI問題
問題
任意の3つの数値の合計を出力するメソッドを作りましょう。
ただし、同じ数が含まれている場合は
合計にカウントされません。
出力例：
lone_sum([1, 2, 3]) → 6
lone_sum([3, 2, 3]) → 2
lone_sum([3, 3, 3]) → 0 -->

<?php

  function lone_sum($array)
  {
    $keep = [0];
    foreach($array as $num1)
    {
      $count = 0;
      foreach($array as $num2)
      {
        if($num1 == $num2)
        {
          $count += 1;
        }
      }
      if($count < 2)
      {
        $keep[] = $num1;
      }
    }
    foreach($keep as $num)
    {
      $calc_num += $num;
    }
    print $calc_num."\n";
  }

  lone_sum([1, 2, 3]);
  lone_sum([3, 2, 3]);
  lone_sum([3, 3, 3]);

?>