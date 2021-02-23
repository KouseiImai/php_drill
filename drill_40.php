<!-- ドリル_Ruby問題 40 rubyのAPI問題
問題
文字列"xyz"を含む任意の文字列があるとします。
以下条件を満たすメソッドを作成しましょう。
xyzの前にピリオド（.）がない場合はTrueを出力
ピリオド（.）がある場合はFalseを出力
上記2つの条件に当てはまらない場合はFalseを出力
ただし、'xyabcz'のような文字列は想定せず、'xyz'は連続して存在するものとします。
詳細は以下の出力例を確認してください。

Trueの条件：xyzの前にピリオド(.)が無い、
Falseの条件：ピリオド(.)がある、xyzの前にピリオド(.)がある

出力例：
xyz_there('abcxyz') → True
xyz_there('abc.xyz') → False
xyz_there('xyz.abc') → True -->

<?php

  function xyz_there($strings)
  {
    $check_dot = strpos($strings, ".");
    $check_x = strpos($strings, "x");

    if( ($check_dot + 1) == $check_x )
    {
      print "False"."\n";
    }
    else
    {
      print "True"."\n";
    }
  }

  xyz_there('abcxyz');
  xyz_there('abc.xyz');
  xyz_there('xyz.abc');

?>