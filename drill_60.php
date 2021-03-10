<!-- ドリル_Ruby問題 60 戦闘力管理アプリケーションの作成3
問題
前回のドリルで作成したアプリケーションに、戦闘力判定機能を追加しましょう。
追加仕様
パンチ力,キック力,ジャンプ力の３つの力の合計を戦闘力とし、
hero_rank メソッドを作成してABCDの４段階にランク分けします。（範囲は任意で構いません）
ヒーローランクは、一覧表示で名前,パンチ力,キック力,ジャンプ力と一緒に表示されるようにします。 -->

<?php

  function register_data()
  {
    $data = [];
    print "名前を入力してください"."\n";
    $data['name'] = trim(fgets(STDIN));
    print "パンチ力を入力してください(1 ~ 100)"."\n";
    $data['punch'] = input_data();
    print "キック力を入力してださい(1 ~ 100)"."\n";
    $data['kick'] = input_data();
    print "ジャンプ力を入力してください(1 ~ 100)"."\n";
    $data['jump'] = input_data();

    $total_power = $data['punch'] + $data['kick'] + $data['jump'];
    $data['rank'] = hero_rank($total_power);

    return $data;
  }

  function input_data()
  {
    while(true)
    {
      $input_num = (integer)fgets(STDIN);
      
      if($input_num >= 1 && $input_num <= 100)
      {
        return $input_num;
        exit;
      }
      else
      {
        print "1 ~ 100までの数字を入力してください"."\n";
      }
    }
  }

  function hero_rank($total_power)
  {
    if($total_power >= 250)
    {
      return 'A';
    }
    elseif($total_power < 250 && $total_power >= 200)
    {
      return 'B';
    }
    elseif($total_power < 200 && $total_power >= 150)
    {
      return 'C';
    }
    elseif($total_power < 150)
    {
      return 'D';
    }
  }

  function show_data_list($datum)
  {
    print "見たい人の番号を入力してください"."\n";
    foreach($datum as $data)
    {
      $index += 1;
      print "[".$index."]：".$data['name']."\n";
    }
    $choice = (integer)fgets(STDIN);

    print "名前：".$datum[$choice - 1]['name']."\n";
    print "パンチ力：".$datum[$choice - 1]['punch']."\n";
    print "キック力：".$datum[$choice - 1]['kick']."\n";
    print "ジャンプ力：".$datum[$choice - 1]['jump']."\n";
    print "ランク：".$datum[$choice - 1]['rank']."\n";
  }


  $datum = [];
  while(true)
  {
    print "選択してください"."\n";
    print "[1]登録する"."\n";
    print "[2]データを確認する"."\n";
    print "[3]終了する"."\n";
    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($datum, register_data());
    }
    elseif($input == 2)
    {
      show_data_list($datum);
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