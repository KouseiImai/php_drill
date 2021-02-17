<!-- ドリル_Ruby問題 35 if,else問題
問題.
2桁の正の整数を入力します。その整数が、
10の倍数（10,20,30...）からの差が
2以内であるときはTrue
それ以外はFalseと出力するメソッドを作りましょう。
出力例：
near_ten(12)→True
near_ten(17)→False
near_ten(19)→True -->

<?php
  
  function near_ten($num)
  {
    $comparison_num = $num % 10;
    if($comparison_num <= 2 || $comparison_num >= 8)
    {
      print "True"."\n";
    }
    else
    {
      print "False"."\n";
    }
  }

  near_ten(12);
  near_ten(17);
  near_ten(19);

?>