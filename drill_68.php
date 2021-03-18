<!-- ドリル_Ruby問題 68 クラスとインスタンスの問題
問題.1
カロリー計算のプログラムをつくりましょう。以下のような仕様です。

メニュー画面ではカロリーを入力か、カロリーの合計を見るか選べます
カロリーを入力の場合、料理名とカロリーを入力します
入力後はメニューに戻り、続けてカロリーを入力か、カロリーの合計を見るかを選べます
カロリーの合計を見るを選んだら全ての料理名とカロリーを表示して、最後にカロリーの合計を表示します
カロリーの合計を見たらプログラムを終了します

メニュー画面
ターミナル
[1]:カロリーを入力する
[2]:カロリーの合計を見る

カロリー入力画面
ターミナル
料理名を入力してください:
スパゲティ
カロリーを入力してください:
720

カロリー合計表示画面
ターミナル
-----------------------------
メロンパン  :430kcal
スパゲティ  :720kcal
バナナ  :80kcal
-----------------------------
カロリー合計  :1230kcal 

プログラムのひな形は以下です。
question3.rb
  class Food
    # ここにクラスの定義を書き加えてください
  end

  while true do
    puts "[0]:カロリーを入力する"
    puts "[1]:カロリーの合計を見る"
    input = gets.to_i

    if input == 0
      Food.input           # カロリーの入力
    elsif input == 1
      Food.show_all_calory # カロリーの合計を表示
      exit
    end
  end
Foodクラスの中だけ書き加えて、あとはこのひな形の通りに作ってください。

-->


<?php

  class Food
  {
    public function register_calorie()
    {
      $data = [];
      print "メニュー名を入力して下さい"."\n";
      $data['name'] = trim(fgets(STDIN));
      print "カロリーを入力して下さい"."\n";
      $data['calorie'] = (integer)fgets(STDIN);

      return $data;
    }

    public function show_calorie($datum)
    {
      $separation = "-------------------------------------";
      print $separation."\n";
      foreach($datum as $data)
      {
        print $data['name']."：".$data['calorie']."kcal"."\n";
        $total_calorie += $data['calorie'];
      }
      print $separation."\n";
      print "カロリー合計：".$total_calorie."kcal"."\n";
    }
  }

  $datum = [];
  while(true)
  {
    print "[1]：カロリーを入力する"."\n"."[2]：カロリーの合計を見る"."\n";
    $input = (integer)fgets(STDIN);

    $food = new Food;
    if($input == 1)
    {
      array_push($datum, $food->register_calorie());
    }
    elseif($input == 2)
    {
      $food->show_calorie($datum);
      exit;
    }
    else
    {
      print "適正な値を選択して下さい"."\n";
    }
  }

?>