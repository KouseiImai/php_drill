<!-- 夜間・休日用 ドリル_Ruby問題 3 値に名前をつけて使おう
問題.Rubyの記述をPHPに変更
国語が80点、英語が50点、数学が70点の場合のテストの平均点をターミナルに出力するプログラムを記述してください。
条件1：このプログラムでは各教科の点数を変数を使って定義してください。
条件2：出力結果は以下のようになるようにコードを書きましょう。
ターミナル
 ３教科の平均点は、◯点です。
※◯の箇所には計算した平均点が入ります。
出力にはputsを使います。putsのあとに半角スペースと出力したい文字列を続けることで、文字をターミナルに出力できます。
puts "出力したい文字列" -->

<?php

  function average_calc()
  {
    $japanese_score = 80;
    $english_score = 50;
    $math_score = 70;
  
    return floor(($japanese_score + $english_score + $math_score) / 3);
  }

  $average_score = average_calc();

  echo '3強化の平均点は、',$average_score,'点です';
?>