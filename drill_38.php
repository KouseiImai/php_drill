<!-- ドリル_Ruby問題 38 rubyの検索問題

========================================================================
問題
配列に任意の値が存在するかどうか、検索するコードを作成しましょう。
任意の値が配列内に存在しない場合は値は配列内に存在しませんと表示され、
存在する場合は、配列の何番目にあるかを表示してください。

配列 array=[1,3,5,6,9,10,13,20,26,31]

検索はバイナリーサーチ（２分割検索）を使用して行います。
<バイナリーサーチとは>
ソート済みのリストや配列に入ったデータ（同一の値はないものとする）に
対する検索を行うにあたって、 中央の値を見て、検索したい値との大小関係を用いて、
検索したい値が中央の値の右にあるか、左にあるかを判断して、片側には存在しないことを
確かめながら検索していく方法。
１回の処理で選択肢が半分になるので、処理速度の向上が期待できる。
========================================================================
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
出力例：
検索したい数字を入力してください
5は配列の2番目に存在します 
検索したい数字を入力してください
7は配列内に存在しません
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
ヒント
まず.countメソッドを使用して配列内の値を取得し、
変数number_of_elementsとします。
binary_searchメソッド内で配列の要素数を半分にしたものを
変数centerとしましょう。
while文を使用して、当てはまるまで計算を繰り返します。 -->

<?php

  function binary_search($array, $right, $input)
  {
    $left = 0;
    while($left <= $right)
    {
      $center = floor(($left + $right) / 2);
      if($array[$center] == $input)
      {
        return $center;
      }
      elseif($array[$center] < $input)
      {
        $left = $center + 1;
      }
      else
      {
        $right = $center - 1;
      }
    }
    return -1;
  }

  $array=[1,3,5,6,9,10,13,20,26,31];
  print "検索したい数字を入力してください"."\n";
  $input = fgets(STDIN);

  $number_of_elements = count($array);
  $answer = binary_search($array, $number_of_elements, $input);

  if($answer == -1)
  {
    print rtrim($input)."は配列の中に存在しません"."\n";
  }
  else
  {
    print rtrim($input)."は配列の".$answer."番目に存在します"."\n";
  }



?>