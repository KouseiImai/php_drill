<!-- ドリル_Ruby問題 47 引数とハッシュを使いこなそう
問題
ある映画のハッシュを定義し、
格納されている「title」(タイトル）・「genre」(ジャンル)・「year」(公開年)の
三つの要素の中から一つを取り出すプログラムを作成してください。

定義する変数
①movie = {"title" => "ハリーポッター", "genre" => "ファンタジー", "year" => "2001年"}
②ユーザーが入力するキーを、getsメソッドを利用し定義しましょう
実行結果
例：「title」の要素を取り出したい場合
# デスクトップに移動
%cd Desktop
# Rubyファイルを実行
%ruby argument_test.rb
 "以下から一つを選んで入力してください。
・title
・genre
・year"
#「title」を入力
title
ハリーポッター -->


<?php

  function movie_info($movie, $input)
  {
    print $movie[$input]."\n";
  }

  $movie = array('title' => 'ハリーポッター', 'genre' => 'ファンタジー', 'year' => '2001年');

  print "以下から一つを選んで入力してください"."\n";
  print "・title"."\n"."・genre"."\n"."・year"."\n";
  $input = (string)trim(fgets(STDIN));

  movie_info($movie, $input);

?>