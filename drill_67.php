<!-- ドリル_Ruby問題 67 商品管理アプリケーションの作成2
問題
前回作成したアプリケーションに会計機能を追加してください。

追加する仕様
・[2]の処理が終わった後
1.購入を確定するか、買い物を続けるかをユーザーに入力させる
2.入力させた値ごとの処理を行う
3.(購入確定するを選択した場合) 合計金額を表示し、ユーザーに支払う金額を入力してもらう。
支払う金額から合計金額をマイナスし、あまりを出力する。※金額が足りない場合はもう一度入力させる。 -->


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
    foreach($cart as $item)
    {
      $index += 1;
      print "[".$index."]"."\n";
      print "商品名：".$item['name']."\n";
      print "金額：".$item['price']."\n";
      print "個数：".$item['volume']."\n";
    }
    print "合計金額：".calc_price($cart)."円"."\n";
  }

  function calc_price($cart)
  {
    $total_price = 0;
    foreach($cart as $item)
    {
      $total_price += ($item['price'] * $item['volume']);
    }
    return $total_price;
  }

  function purchase($cart)
  {
    $purchase_price = calc_price($cart);
    $under_purchase = true;
    while($under_purchase)
    {
      print "購入金額：".$purchase_price."円"."\n";
      print "支払う金額を入力して下さい"."\n";
      $user_payment_amount = (integer)fgets(STDIN);
      $change = $user_payment_amount - $purchase_price;

      if($change == 0)
      {
        print "支払い金額は丁度です。"."\n"."ご購入ありがとうございます"."\n";
        $under_purchase = false;
      }
      elseif($change > 0)
      {
        print "お釣りは".$change."円です"."\n"."ご購入ありがとうございます"."\n";
        $under_purchase = false;
      }
      elseif($change < 0)
      {
        print abs($change)."円、お支払い金額が足りません。"."\n"."お支払い金額を再度入力して下さい"."\n";
      }
      else
      {
        print "再度入力して下さい"."\n";
      }
    }

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
      if(count($cart) >= 1)
      {
        show_cart($cart);
        $loop = true;
        while($loop)
        {
          print "購入を続けますか？、購入を確定しますか？"."\n";
          print "[1]：購入を続ける"."\n"."[2]：購入を確定する"."\n";
          $input2 = (integer)fgets(STDIN);
          if($input2 == 1)
          {
            array_push($cart, register_cart());
          }
          elseif($input2 == 2)
          {
            purchase($cart);
            $cart = [];
            $loop = false;
          }
          else
          {
            print "適切な値を選択して下さい"."\n";
          }
        }
      }
      else
      {
        print "カートが空です。商品をカートに入れて下さい"."\n";
      }
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