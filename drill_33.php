<!-- ドリル_Ruby問題 33 rubyのAPI問題
問題
任意の文字列の最初の2文字を最後尾に持ってきて
その文字を出力するメソッドを作りましょう。
出力例：
left2("Hello") → lloHe
left2("java") → vaja
left2("Hi") → Hi
ヒント
範囲指定をして、指定の要素を取得しましょう。 -->

<?php

  function left2($string)
  {
    if(strlen($string) <= 2)
    {
      print substr($string, 0, 2)."\n";
    }
    else
    {
      print substr($string, 2).substr($string, 0, 2)."\n";
    }
    
  }

  left2("Hello");
  left2("java");
  left2("Hi");
?>