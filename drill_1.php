<!-- ドリル_Ruby問題 1 ハッシュの基礎
問題.Rubyの文法をPHPにて記述
＜Ruby文＞
puts hash.keys
puts hash.values
上記のメソッドを実行した時に
one
two
three
1
2
3
とターミナルに表示されるような変数hashを作成するためのコードをシンボルを使って記述してください。 -->

<?php

  $hash = array('one' => 1, 'two' => 2, 'three' => 3);
  

  function keys($hash)
  {
    foreach($hash as $key => $value)
    {
      print $key."\n";
    }
  }

  function values($hash)
  {
    foreach($hash as $value)
    {
      print $value."\n";
    }
  }

  keys($hash);
  values($hash);

?>