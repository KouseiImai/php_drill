<!-- ドリル_Ruby問題 49 クラスとインスタンス
問題
以下の仕様にしたがってコードを記述してください。
・Personクラスはプロパティ name, ageを持っている。
・StudentクラスはPersonクラスを継承している。
・Studentクラスにはintroduceメソッドが定義されている。実行すると
 「私の名前は◯◯です。◯歳です」と表示がされる。
・Studentクラスのインスタンスを作成し、introduceメソッドを実行する。 -->


<?php

  class Person
  {
    public $name;
    public $age;

    public function __construct($n, $a)
    {
      $this->name = $n;
      $this->age  = $a;
    }

  }

  class Student extends Person
  {
    public function introduce(){
      print "私の名前は".$this->name."です。".$this->age."歳です"."\n";
    }
  }

  $student = new Student('太郎', 12);
  $student->introduce();

?>