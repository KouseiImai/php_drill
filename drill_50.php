<!-- ドリル_Ruby問題 50 rubyのAPI問題
問題
任意の文字列にcatとdogの文字が含まれていたらtrue、
それ以外だとfalseを出力するメソッドを作りましょう。
出力例：
include_cat_and_dog?("catdog") → true
include_cat_and_dog?("catcat") → false
include_cat_and_dog?("1cat1cadodog") → true -->


<?php

  function include_cat_and_dog($strings)
  {
    $cat_count = substr_count($strings, 'cat');
    $dog_count = substr_count($strings, 'dog');

    if($cat_count >= 1 && $dog_count >= 1)
    {
      print "true"."\n";
    }
    else
    {
      print "false"."\n";
    }
    
  }

  include_cat_and_dog("catdog");
  include_cat_and_dog("catcat");
  include_cat_and_dog("1cat1cadodog");

?>