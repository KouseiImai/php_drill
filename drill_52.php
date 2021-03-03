<!-- ドリル_Ruby問題 52 書籍管理アプリケーションの作成1
問題
以下の仕様を満たすアプリケーションを作成してください。
実装の際、注意の下に記載されている雛形を使用してください。
仕様
プログラムの実行を行うと、
・ [0]を選択した場合は、本の著者、タイトル、価格を入力させ、保存する。
・ [1]を選択した場合は、保存された本の番号とタイトルを出力、選択できるようにする。 表示した番号を選択された場合は、選択された本の著者、タイトル、価格を出力する。
・ [2]を選択した場合は、アプリケーションを終了する。 -->


<?php

  function book_data_save()
  {
    $data = [];
    print "本の著者を入力してください"."\n";
    $data['author'] = trim(fgets(STDIN));
    print "本のタイトルを入力してください"."\n";
    $data['title'] = trim(fgets(STDIN));
    print "価格を入力してください"."\n";
    $data['price'] = (integer)trim(fgets(STDIN));

    return $data;
  }

  function show_book_data($datum)
  {
    book_list($datum);
    print "表示したい本の番号を選んでください"."\n";
    $input = (integer)trim(fgets(STDIN) - 1);

    print "著者：".$datum[$input]['author']."\n";
    print "タイトル：".$datum[$input]['title']."\n";
    print "価格：".$datum[$input]['price']."\n";
  }

  function book_list($datum)
  {
    foreach($datum as $data)
    {
      $index += 1;
      print "[".$index."]".$data['title']."\n";
    }
  }

  $datum = [];
  while(true)
  {
    print "[1]：本情報の保存"."\n";
    print "[2]：保存されている本情報の表示"."\n";
    print "[3]：アプリケーションの終了"."\n";
    print "実行する内容を選択してください"."\n";
    $input = (integer)fgets(STDIN);

    if($input == 1)
    {
      array_push($datum, book_data_save());
    }
    elseif($input == 2)
    {
      show_book_data($datum);
    }
    elseif($input == 3)
    {
      exit;
    }
    else
    {
      print "入力された値は選択肢にありません。"."\n";
    }

  }

?>