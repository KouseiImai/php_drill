<!-- ドリル_Ruby問題 26 rubyのAPI問題
問題
任意の文字列の最後の2文字を3回繰り返し
出力するメソッドを作りましょう。

出力例：
extra_end('Hello') → 'lololo'
extra_end('ab') → 'ababab'
extra_end('Hi') → 'HiHiHi'

ヒント
sliceメソッドを使いましょう。
 slice
sliceメソッドを用いることで、配列や文字列から指定した要素を取り出すことができます。
# 配列を作成します
array = [0,1,2,3,4,5,6]

# 配列から引数で指定した要素をsliceします
ele1 = array.slice(1)
puts ele1
#=> 1

# 配列番号1から4つ分の要素をsliceします
ele2 = array.slice(1,4)
puts ele2
#=> 1 2 3 4

# 配列はもとのままです
puts array 
#=> [0,1,2,3,4,5,6] -->


<?php

  function extra_end($string)
  {
    $two_letters = substr($string, -2, 2);
    for($i = 1; $i <= 3; $i++)
    {
      print $two_letters;
    }
    print "\n";
  }

  extra_end('Hello');
  extra_end('ab');
  extra_end('Hi');
?>