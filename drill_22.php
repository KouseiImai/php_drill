<!-- ドリル_Ruby問題 22 偶数値の取得
問題
配列にある値の中から偶数の数をカウントして出力するメソッドを作りましょう。
出力例：
count_evens([2, 1, 2, 3, 4]) → 3
count_evens([2, 2, 0]) → 3
count_evens([1, 3, 5]) → 0
ヒント
even?というメソッドを使いましょう。
even?メソッド
Rubyが元々用意している、対象の数値が偶数かどうかを判断するメソッドです。
対象の要素の値が偶数であれば真を返し、そうでない場合は偽を返します。
even?メソッドの詳細は公式リファレンスを確認しましょう。
10.even?
#=> true
5.even?
#=> false -->

<?php

  function count_evens($num_array)
  {
    $count = 0;
    foreach($num_array as $num)
    {
      if($num%2 == 0)
      {
        $count +=1;
      }
    }
    print $count. "\n";
  }

  count_evens([2, 1, 2, 3, 4]);
  count_evens([2, 2, 0]);
  count_evens([1, 3, 5]);

?>
