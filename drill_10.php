<!-- ドリル_Ruby問題 10 配列を利用したrubyプログラムの作成
問題.Ruby→PHPへ書き替え
以下の配列から、数を探して何番目に含まれているか結果を返すメソッドを
searchとeach_with_indexを用いて作成してください。
input = [3, 5, 9 ,12, 15, 21, 29, 35, 42, 51, 62, 78, 81, 87, 92, 93]
ヒント
 search
（使用例）
search(12, input)
=> 4番目にあります
search(7, input)
=> その数は含まれていません
 each_with_index
each_with_indexはRubyに標準で組み込まれているメソッドの1つです。
要素の繰り返し処理と同時に、その要素が何番目に処理されたのかも表すことができます。
以下のように書きます。
配列名.each_with_index  do |item, i|

end
具体的には以下のように使うことができます。
fruits = ["メロン", "バナナ", "アップル"]
fruits.each_with_index do |item, i|
 puts "#{i}番目のフルーツは、#{item}です。"
end
これを実行すると、以下のような出力結果が得られます。
0番目のフルーツは、メロンです。
1番目のフルーツは、バナナです。
2番目のフルーツは、アップルです。 -->

<?php

  // each_with_indexと同等のメソッドがPHPに見当たらなかった為、foreachのみで対応。

  $input = [3, 5, 9 ,12, 15, 21, 29, 35, 42, 51, 62, 78, 81, 87, 92, 93];

  function search($search_num, $input)
  {
    foreach($input as $num)
    {
      $i +=1;
      if($search_num == $num)
      {
        return print $i. "番目にあります". "\n";
      }
    }
    return print "その数は含まれてません". "\n";
  }

  search(12, $input);
  search(7, $input);
  search(93, $input);
  search(100, $input);

?>