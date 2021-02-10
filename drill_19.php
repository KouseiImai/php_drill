<!-- ドリル_Ruby問題 19 rubyのAPI問題
問題.1
任意の文字列で
"hi"がいくつあるか数えてその数を出力するメソッドを作りましょう。
出力例：
count_hi('abc hi ho') → 1
count_hi('ABChi hi') → 2
count_hi('hihi') → 2

ヒント
scanを使用しましょう。
scan
scanは、対象の要素から引数で指定した文字列を数え、配列として返すメソッドです。
scanメソッドの詳細は公式リファレンスを確認しましょう。
"foobarbazfoobarbaz".scan("ba")
=> ["ba", "ba", "ba", "ba"] -->

<?php

  function count_hi($string)
  {
    $str_count = substr_count($string, "hi");
    print $str_count. "\n";
  }

  count_hi('abc hi ho');
  count_hi('ABChi hi');
  count_hi('hihi');

?>