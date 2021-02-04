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
    public $author;
    public $title;
    public $content;

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
