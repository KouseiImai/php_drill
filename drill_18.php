<!-- ドリル_Ruby問題 18 if,else問題(演算子)
問題.1
あなたは警官です。aとb二人の容疑者の取り調べをしています。
どちらも証言がTrue、またはFalseであればその証言はTrueです。
しかしどちらかがFalseでTrueであればその証言はFalse、
と出力するメソッドを論理演算子を用いて作りましょう。

呼び出し方：
police_trouble(a, b)
出力例：
police_trouble(true, false) → False
police_trouble(false, false) → True
police_trouble(true, true) → True
ヒント
 論理演算子
2つ以上の条件式を組み合わせた複雑な条件式を記述するために論理演算子&&、||、!を使います。
以下のように使用します。
# aもbもtrueの場合にtrue 
a && b
# aかbのどちらかがtrueの場合にtrue
a || b 
# aがtrueの場合にfalse、aがfalseの場合にtrue
!a -->

<?php

  function police_trouble($a, $b)
  {
    if( ($a && $b) || (!$a && !$b) )
    {
      print "True". "\n";
    }
    else
    {
      print "False". "\n";
    }
  }

  police_trouble(true, false);
  police_trouble(false, false);
  police_trouble(true, true);

?>