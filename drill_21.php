<!-- ドリル_Ruby問題 21 if,else問題
問題.1
20時から翌朝7時までにオウムに喋られると問題があるのでその場合は「NG」、
それ以外は「OK」と出力するメソッドを作成します。
オウムが喋る時をtrue、喋らない時をfalseと入力することにし、時刻も同時に入力します。

呼び出し方：
parrot_trouble(talking, hour)
出力例：
parrot_trouble(true, 6) → NG
parrot_trouble(true, 7) → OK
parrot_trouble(false, 6) → OK
parrot_trouble(false, 7) → OK -->

<?php

  function parrot_trouble($talking, $hour)
  {
    if(($hour < 7 || $hour > 20) && $talking)
    {
      print "NG". "\n";
    }
    else
    {
      print "OK". "\n";
    }
  }

  parrot_trouble(true, 6);
  parrot_trouble(true, 7);
  parrot_trouble(false, 6);
  parrot_trouble(false, 7);

?>