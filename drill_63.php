<!-- ドリル_Ruby問題 63 車両管理アプリケーションの作成３
問題
前回作成したアプリケーションに機能を追加しましょう。
前回までの仕様
・[1]の処理
1.車種、1Lあたりの走行可能距離(km/l)、乗車人数の入力をユーザーに入力を行って貰う
2.上記の値の保存を行う

・[2]の処理
1.保存した情報から番号と名前で一覧を表示し、見たい車種の番号の入力を求める
2.入力された個別の車種の名前、1Lあたりの走行可能距離(km/l)、乗車人数の表示を行う
3.これから走る距離(km)をユーザーに入力を行って貰う
4.これから走る距離に対して何L(リットル)ガソリンを消費するか出力を行う
・[3]の処理
1.アプリケーションの終了
・[3]でアプリケーションを終了するまで、投稿や閲覧が出来るように繰り返す

追加する仕様
・[2]の処理
入力された乗車人数に対して、あと何人乗ることが出来るのか、何人定員オーバーなのか出力を行う -->

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

    print "これから走る距離(km)を入力してください"."\n";
    $planned_mileage = (integer)fgets(STDIN);
    calc_mileage($datum[$choice]['mileage'], $planned_mileage);

    print "乗車人数を入力してください"."\n";
    $planned_member = (integer)fgets(STDIN);
    calc_ride_num($datum[$choice]['ride_num'], $planned_member);
  }

  function show_car_list($datum)
  {
    foreach($datum as $data)
    {
      $index += 1;
      print "[".$index."]：".$data['type']."\n";
    }
  }

  function calc_mileage($mileage, $planned_mileage)
  {
    $expend_gasoline = $planned_mileage / $mileage;
    $expend_gasoline = round($expend_gasoline, 1);
    print $planned_mileage."km走行するには、".$expend_gasoline."Lガソリンを消費します"."\n";
  }

  function calc_ride_num($ride_num, $planned_member)
  {
    $capacity = $ride_num - $planned_member;
    if($capacity == 0)
    {
      print "定員丁度です"."\n";
    }
    elseif($capacity >= 1)
    {
      print "あと".$capacity."人、乗車できます"."\n";
    }
    else
    {
      print abs($capacity)."人、定員オーバーです"."\n";
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