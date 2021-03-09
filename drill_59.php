<!-- ドリル_Ruby問題 59 戦闘力管理アプリケーションの作成2
問題
前回のドリルで作成したアプリケーションに、データの登録、呼び出し機能を追加しましょう。
前回までのコード
def register_data
  puts '名前を入力してください'
  puts 'パンチ力を入力してください(1 ~ 100)'
  puts 'キック力を入力してください(1 ~ 100)'
  puts 'ジャンプ力を入力してください(1 ~ 100)'

end

def show_data_list
  puts '見たい人の番号を選択してください'
end

while true
  puts '選択してください'
  puts '[1]登録する'
  puts '[2]データを確認する'
  puts '[3]終了する'
  input = gets.to_i

  if input == 1
    register_data
  elsif input == 2
    show_data_list
  elsif input == 3
    exit
  else
    puts '無効な値です'
  end
end
仕様
・def register_dataメソッドで情報を入力させ、ハッシュに格納したあと、配列に格納するコードを書きましょう。
 登録する情報は、名前,パンチ力,キック力,ジャンプ力です。
 力は1~100までの数値で入力させます。
 1~100以外の値が入力された場合は”100以下の数字を入力してください”と表示し、入力フェーズに戻るようにします。
・show_data_listメソッドで、登録した情報から名前だけを取り出して一覧表示させましょう。

表示例
見たい人の番号を選択してください
1: 山田
2: 佐藤
3: 佐々木
番号が入力されたら、名前,パンチ力,キック力,ジャンプ力を一覧表示します。 -->

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