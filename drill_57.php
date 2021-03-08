<!-- ドリル_Ruby問題 57 健康管理アプリケーションの作成3
問題.1
前回までのアプリケーションに機能を追加して、健康管理アプリケーションを完成させましょう。
追加機能
BMIを計算して、一覧表示の際に追加表示する
BMIの計算方法
BMI=体重÷身長÷身長

仕様
・実行すると [1] : 登録する, [2] : データを確認する, [3] : 終了する という選択肢を表示し、
  ユーザーに入力を求め、その入力に従い以下のような処理を行う
・ [1]の処理
1. 名前、年齢、身長、体重を入力させる
2. '身長と体重からBMIを割り出す' 名前、年齢、身長、体重、'BMI'を保存する
・ [2]の処理
1. 投稿された情報から番号と名前で一覧を表示し（例 [1]山田）、見たい個人の番号の入力を求める
2. 入力された個人の名前、年齢、身長、体重、'BMI'を表示する
・ [3]の処理
1. アプリケーションを終了する
・ [3]でアプリケーションを終了するまで、投稿や閲覧ができるように繰り返す -->

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
    $data['bmi'] = calc_bmi($data['height'],$data['weight']);

    return $data;
  }

  function calc_bmi($height, $weight)
  {
    $bmi = $weight / ($height * $height);
    return round($bmi, 2);
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
    print "BMI：".$datum[$choice - 1]['bmi']."\n";
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