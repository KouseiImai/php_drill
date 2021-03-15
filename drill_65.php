<!-- ドリル_Ruby問題 65 成績管理アプリケーションの作成
問題
以下の仕様を満たすアプリケーションを作成しなさい。
また、注意書きを必ず読んでから実装に入りなさい。
実装の際、注意の下に記載されている雛形を使用しなさい。

仕様
・実行すると [1] : 点数を登録する, [2] : 点数を確認する, [3] : 終了する という選択肢を表示し、ユーザーに入力を求め、その入力に従い以下のような処理を行う
・アプリケーションを終了するまで、処理を繰り返す

[1]の処理
・名前、年齢、国語・数学・英語の3教科の点数を入力させ、保存する

[2]の処理
・投稿された情報から番号と名前で一覧を表示し（例 [1]山田）、見たい個人の番号の入力を求める
・ 入力された個人の名前、年齢、国語・数学・英語の3教科の点数を表示する

[3]の処理
・アプリケーションを終了する -->

<?php

  function register_score()
  {
    $data = [];
    print "名前を入力して下さい"."\n";
    $data['name'] = trim(fgets(STDIN));
    print "年齢を入力して下さい"."\n";
    $data['age'] = (integer)fgets(STDIN);
    print "国語の点数を入力して下さい"."\n";
    $data['japanese'] = (integer)fgets(STDIN);
    print "数学の点数を入力して下さい"."\n";
    $data['math'] = (integer)fgets(STDIN);
    print "英語の点数を入力して下さい"."\n";
    $data['english'] = (integer)fgets(STDIN);

    return $data;
  }

  function show_data($datum)
  {
    show_data_list($datum);
    print "見たい人の番号を入力して下さい"."\n";
    $choice_num = (integer)fgets(STDIN) - 1;

    print "名前：".$datum[$choice_num]['name']."\n";
    print "年齢：".$datum[$choice_num]['age']."歳"."\n";
    print "国語：".$datum[$choice_num]['japanese']."点"."\n";
    print "数学：".$datum[$choice_num]['math']."点"."\n";
    print "英語：".$datum[$choice_num]['english']."点"."\n";
  }

  function show_data_list($datum)
  {
    foreach($datum as $data)
    {
      $index += 1;
      print "[".$index."]：".$data['name']."\n";
    }
  }

  $datum = [];
  while(true)
  {
    print "[1]：点数を登録する"."\n"."[2]：点数を確認する"."\n"."[3]：終了する"."\n";
    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($datum, register_score());
    }
    elseif($input == 2)
    {
      show_data($datum);
    }
    elseif($input == 3)
    {
      exit;
    }
    else
    {
      print "適切な値を入力して下さい"."\n";
    }
  }

?>
