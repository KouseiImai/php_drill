<!-- ドリル_Ruby問題 23 rubyのAPI問題
問題
配列内に1,2,3が全て入っていれば「True」それ以外は「False」と
出力されるメソッドを作りましょう。
呼び出し方
array123(nums)
出力例
array123([1, 1, 2, 3, 1]) → True
array123([1, 1, 2, 4, 1]) → False
array123([1, 1, 2, 1, 2, 3]) → True
ヒント
include?メソッドを使いましょう。
include?
include?メソッドは指定した要素が、配列中に含まれているかを判定するメソッドです。
array = ["foo", "bar"]
puts array.include?("bar")
#=> true
puts array.include?("hoge")
#=> false -->


<?php

  function array123($num_array)
  {
    if(in_array(1, $num_array) && in_array(2, $num_array) && in_array(3, $num_array))
    {
      print "True". "\n";
    }
    else
    {
      print "False". "\n";
    }
  }

  array123([1, 1, 2, 3, 1]);
  array123([1, 1, 2, 4, 1]);
  array123([1, 1, 2, 1, 2, 3]);

?>
