<!-- 夜間・休日用 ドリル_Ruby問題 66 商品管理アプリケーションの作成1
問題
以下の機能が満たされた、アプリケーションを作成してください。
仕様
・プログラムの実行を行うと、
[1]商品をカートに入れる
[2]カートを確認する
[3]アプリを終了する
という選択肢を表示し、ユーザーに入力を求め、その入力に従い以下のような処理を行う。

・[1]の処理
1.商品名、値段、個数をユーザーに入力を行って貰う(入力された値の表示まで行う)
2.上記の値の保存を行う

・[2]の処理
1.保存した情報からデータ一覧を表示し、合計金額を表示する
2.(買い物を続ける) メニューの表示まで戻る

・[3]の処理
1.アプリケーションの終了
・[3]でアプリケーションを終了するまで、投稿や閲覧が出来るように繰り返す -->

<?php

  function register_cart()
  {
    $item = [];
    print "商品名を入力して下さい"."\n";
    $item['name'] = trim(fgets(STDIN));
    print "値段を入力して下さい"."\n";
    $item['price'] = (integer)fgets(STDIN);
    print "個数を入力して下さい"."\n";
    $item['volume'] = (integer)fgets(STDIN);

    return $item;
  }

  function show_cart($cart)
  {
    $total_price = 0;
    foreach($cart as $item)
    {
      $index += 1;
      print "[".$index."]"."\n";
      print "商品名：".$item['name']."\n";
      print "金額：".$item['price']."\n";
      print "個数：".$item['volume']."\n";
      
      $total_price += calc_price($item['price'], $item['volume']);
    }
    print "合計金額：".$total_price."\n";
  }

  function calc_price($price, $volume)
  {
    $calc_price = $price * $volume;
    return $calc_price;
  }

  $cart = [];
  while(true)
  {
    print "[1]：商品をカートに入れる"."\n"."[2]：カートを確認する"."\n"."[3]：アプリを終了する"."\n";
    print "行いたい項目を選択して下さい"."\n";
    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($cart, register_cart());
    }
    elseif($input == 2)
    {
      show_cart($cart);
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