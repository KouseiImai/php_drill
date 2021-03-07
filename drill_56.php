<!-- ドリル_Ruby問題 56 健康管理アプリケーションの作成2
問題
前回のドリルで作成したアプリケーションに、機能を追加していきましょう。

前回までの仕様
・実行すると [1] : 登録する, [2] : データを確認する, [3] : 終了する という選択肢を表示し、
ユーザーに入力を求め、その入力に従い以下のような処理を行う。
・ [1]の処理
 データの登録という文字列を表示させる
・ [2]の処理
 データの閲覧という文字列を表示させる
・ [3]の処理
 アプリケーションを終了する
・ [3]でアプリケーションを終了するまで処理を繰り返す
・選択肢以外の値を入力された場合の処理
 無効な値ですと表示し、再度選択肢を表示する

追加機能
・[1]の処理
ユーザーに名前、年齢、身長（m単位）、体重の入力を求め、
ハッシュと配列を使ってデータを登録する
（前回表示させていた文字列は削除してください）
・ [2]の処理
登録したデータから名前を一覧で出力し、見たい人の番号を選択してもらう
選択された番号のデータ（名前、年齢、身長、体重）を一覧で出力する
（前回表示させていた文字列は削除してください）

出力例
見たい人の番号を選択してください
1:山田
2:佐藤
3:鈴木
1  (#1を選択)
名前:山田
年齢:19
身長:1.7
体重:60.0 -->


<?php

  function user_registration()
  {
    print "名前を入力してください"."\n";
    $data['name'] = trim((string)fgets(STDIN));
    print "年齢を入力してください"."\n";
    $data['age'] = (integer)fgets(STDIN);
    print "身長を入力したください (m単位)"."\n";
    $data['height'] = (float)fgets(STDIN);
    print "体重を入力してください"."\n";
    $data['weight'] = (integer)fgets(STDIN);

    return $data;
  }

  function show_data($datum)
  {
    print "見たい人の番号を選択してください"."\n";
    user_list($datum);
    $choice = (integer)fgets(STDIN);
    print "名前：".$datum[$choice - 1]['name']."\n";
    print "年齢：".$datum[$choice - 1]['age']."歳"."\n";
    print "身長：".$datum[$choice - 1]['height']."m"."\n";
    print "体重：".$datum[$choice - 1]['weight']."kg"."\n";
  }

  function user_list($datum)
  {
    foreach($datum as $data)
    {
      $index += 1;
      print $index."：".$data['name']."\n";
    }
  }


  $datum = [];
  while(true)
  {
    print "[1]：登録する"."\n";
    print "[2]：データを確認する"."\n";
    print "[3]：終了する"."\n";
    print "番号を選択してください"."\n";

    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($datum, user_registration());

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
      print "無効な値です"."\n";
    }

  }

?>