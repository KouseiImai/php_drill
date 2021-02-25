<!-- ドリル_Ruby問題 43 クラスとインスタンスを利用したプログラム
問題
以下の条件を満たすコードを記述してください。
・Bookクラスを作成する
・Bookクラスは@titleと@priceをプロパティとして持っている
・attr_readerを使用する
・Bookクラスのインスタンスを作成する（タイトル、価格は任意）
・作成したインスタンスから、タイトルと価格を取得し画面に表示させる。 -->

<?php

  class Book
  {
    public $title;
    public $price;

    public function __construct($title, $price)
    {
      $this->title = $title;
      $this->price = $price;
    }

    public function title()
    {
      
      print $this->title."\n";
    }

    public function price()
    {
      print $this->price."円"."\n";
    }
  }

  $book = new Book('PHP入門', 3218);
  $book->title();
  $book->price();


?>