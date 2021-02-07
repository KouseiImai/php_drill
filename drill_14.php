<!-- ドリル_Ruby問題 14 if,else問題
問題.1
以下の条件式をif文を用いて記述してください。
数値numが1以上かつ10以下の範囲であればTrueを出力します。
または、outside_modeがTrueの場合は数値numが0以下、11以上であってもTrueを出力します。
それ以外はFalseを出力する条件を論理演算子&&と||を用いて作りましょう。
以下の雛形を用いて条件式を記述しましょう。
def in1to10(num, outside_mode)
  # ここに条件式を記述する
end
出力例：
in1to10(5,false) →True
in1to10(11,false) →False
in1to10(11,true) →True
ヒント
 論理演算子
2つ以上の条件式を組み合わせた複雑な条件式を記述するために論理演算子&&と||を使います。

以下のように使用します。
# aもbもtrueの場合にtrue
a && b 
# aかbのどちらかがtrueの場合にtrue
a || b 
なおRubyの論理演算子では、左辺から右辺に条件式を評価します。
もし式全体の評価が確定した場合は、その時点で残りの評価を行いません。
したがって、上の例で言えば、a&&bにおいてaがfalseの時点で全体がfalseと確定するため、
bの判定は行いません。a||bでは、aがtrueの時点で全体がtrueと確定するため、bの判定は行いません。 -->

<?php

  function in1to10($num, $outside_mode)
  {
    if(($num >= 1 && $num <= 10) || $outside_mode)
    {
      print "True"."\n";
    }
    else
    {
      print "False"."\n";
    }
  }

  in1to10(5,false);
  in1to10(11,false);
  in1to10(11,true);

?>