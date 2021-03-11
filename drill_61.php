<!-- ドリル_Ruby問題 61 車両管理アプリケーションの作成１
問題
以下の仕様を満たすアプリケーションを作成しましょう。
仕様
・プログラムの実行を行うと、
[1]データの登録
[2]データの確認
[3]プログラムの終了
という選択肢を表示し、ユーザーに入力を求め、その入力に従い以下のような処理を行う。
・[1]の処理
1.車種、1Lあたりの走行可能距離(km/l)、乗車人数の入力をユーザーに入力を行って貰う
2.上記の値の保存を行う
・[2]の処理
1.保存した情報から番号と名前で一覧を表示し、見たい車種の番号の入力を求める
2.入力された個別の車種の名前、1Lあたりの走行可能距離(km/l)、乗車人数の表示を行う
・[3]の処理
1.アプリケーションの終了
・[3]でアプリケーションを終了するまで、投稿や閲覧が出来るように繰り返す -->


<?php

  function register_car_data()
  {
    $data = [];
    print "車種を入力してください"."\n";
    $data['type'] = trim(fgets(STDIN));
    print "1Lあたりの走行可能距離(km/l)を入力してください"."\n";
    $data['mileage'] = (integer)fgets(STDIN);
    print "乗車人数を入力してください"."\n";
    $data['ride_num'] = (integer)fgets(STDIN);
    return $data;
  }

  function show_car_data($datum)
  {
    show_car_list($datum);
    print "見たい車種の番号を入力してください"."\n";
    $choice = (integer)fgets(STDIN) - 1;

    print "車種：".$datum[$choice]['type']."\n";
    print "1Lあたりの走行可能距離：".$datum[$choice]['mileage']."km/l"."\n";
    print "乗車人数：".$datum[$choice]['ride_num']."人"."\n";
  }

  function show_car_list($datum)
  {
    foreach($datum as $data)
    {
      $index += 1;
      print "[".$index."]：".$data['type']."\n";
    }
  }

  $datum = [];
  while(true)
  {
    print "番号を選択してください"."\n";
    print "[1]：データの登録"."\n";
    print "[2]：データの確認"."\n";
    print "[3]：プログラムの終了"."\n";
    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($datum, register_car_data());
    }
    elseif($input == 2)
    {
      show_car_data($datum);
    }
    elseif($input == 3)
    {
      exit;
    }
    else
    {
      print "入力された値は選択肢にありません"."\n";
    }
  }

?>