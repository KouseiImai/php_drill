<!-- ドリル_Ruby問題 41 if,else問題
問題
3つの整数a、b、cが与えられた場合に以下条件を満たすメソッドを作成しましょう。
・aとbの差が1かつbとcとの差が2以上の場合「True」と出力する
・aとcの差が1、かつbとcとの差が2以上の場合「True」と出力する
・それ以外は「False」と出力する

close_far(整数,整数,整数)
出力例：
close_far(1, 2, 10) → True
close_far(1, 2, 3) → False
close_far(4, 1, 3) → True -->

<?php

  function close_far($a, $b, $c)
  {
    $x = abs($a - $b);
    $y = abs($b - $c);
    $z = abs($a - $c);

    if( ($x == 1 || $z == 1) && $y >= 2 )
    {
      print "True"."\n";
    }
    else
    {
      print "False"."\n";
    }
  }

  close_far(1, 2, 10);
  close_far(1, 2, 3);
  close_far(4, 1, 3);

?>