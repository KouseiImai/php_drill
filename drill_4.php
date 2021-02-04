<!-- ドリル_Ruby問題 4 クラスとインスタンス
問題.Rubyの問題をPHPにて回答
class Article
  def initialize(author, title, content)
    @author = author
    @title = title
    @content = content
  end
end

上記のコードに追加を行い、以下の出力結果を得られるようにしてください。ただし、クラスとインスタンスを使用するものとします。
ターミナル
著者: 阿部
タイトル: Rubyの素晴らしさについて
本文: Awesome Ruby! -->

<?php

  class Article {
    private $author;
    private $title;
    private $content;

    public function __construct($author, $title, $content)
    {
      $this->author = $author;
      $this->title = $title;
      $this->content = $content;
    }

    public function author()
    {
      return $this->author;
    }

    public function title()
    {
      return $this->title;
    }

    public function content()
    {
      return $this->content;
    }
  }

  $article = new Article("阿部", "Rubyの素晴らしさについて", "Awesome Ruby!");
  print "著者：". $article->author(). "\n";
  print "タイトル：". $article->title(). "\n";
  print "本文：". $article->content(). "\n";

?>


<!-- メモ -->
<!-- 
  ・Articleクラス内のプロパティ宣言時の「private」はアクセス権の設定であり、privateはクラス内からのみアクセス可能
   という事になる。
  →適切なアクセス権の設定をしておく事で、勝手に値を変更される事態を防ぐことができる。

  ・$this ←「$this」変数は自身を指し示す為の特別な変数。メソッド内やそのクラスのプロパティやメソッドにアクセスするために使われる。

  ・public function __construct  ←コンストラクタはオブジェクト生成時に実行されるメソッドRubyのinitializeメソッドに
                                あたる。

  ・$article = new Article("阿部", "Rubyの素晴らしさについて", "Awesome Ruby!");
   →上記の記述にてArticleクラスのオブジェクトを生成。生成時に著者、タイトル、本文を引数として持たせる事で、Articleクラス
    内のコンストラクタに値を渡している。


 -->