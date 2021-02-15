<!-- ドリル_Ruby問題 34 rubyのAPI問題
問題
配列の中に複数の数字を入れて9だけカウントし
「配列の中には9が3個です」と
出力させるメソッドを作りましょう。
呼び出し方
array_count9(nums)
出力例
array_count9([1, 2, 9]) → 1
array_count9([1, 9, 9]) → 2
array_count9([1, 9, 9, 3, 9]) → 3
ヒント
countメソッドを使用しましょう。
count
countの役割は、指定した数字に一致するものの個数をカウントして返します。
ary = [1, 2, 4, 2]
ary.count             # => 4
ary.count(2)          # => 2 -->

<?php

  function array_count9($array)
  {
    $num_array = array_count_values($array);
    foreach($num_array as $key => $val)
    {
      if($key == 9)
      {
        print "「配列の中には9が".$val."個です」"."\n";
      }
    }
  }

  array_count9([1, 2, 9]);
  array_count9([1, 9, 9]);
  array_count9([1, 9, 9, 3, 9]);
?>
