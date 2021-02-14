<!-- ドリル_Ruby問題 31 rubyのAPI問題
問題
任意の2つの文字列があります。
どちらかの文字列がもう一方の文字列の最後にある場合はTrueを
ない場合はFalseを出力するプログラムを作りましょう。
条件として、入力された文字が大文字でも小文字でも、同一の文字として処理を行いましょう。
その際、大文字から小文字に変換するメソッドを使用しましょう。

出力例：
end_other('Hiabc', 'abc') → True
end_other('AbC', 'HiaBc') → True
end_other('abc', 'abXabc') → True

ヒント
sliceの範囲指定
範囲を指定して要素を切り取る場合は、以下のように記述して使うことができます。
# 要素を定義
array = "Hiabc"

#配列番号（インデックス番号）の-3から-1の範囲の文字列を切り取る
array.slice(-3..-1)
#=> abc
downcase
大文字を小文字に変換するメソッドです

ターミナル
# 大文字を含んだ文字列を定義
irb(main):001:0> name = "Hiabc"
=> "Hiabc"

# downcaseメソッドを使用し、小文字に変換
irb(main):002:0> name.downcase
=> “hiabc” -->

<?php

  function end_other($string1, $string2)
  {

    if(mb_strlen($string1) > mb_strlen($string2))
    {
      $string1 = substr($string1, -(mb_strlen($string2)), mb_strlen($string2));
    }
    else
    {
      $string2 = substr($string2, -(mb_strlen($string1)), mb_strlen($string1));
    }

    if(strcasecmp($string1, $string2) == 0)
    {
      print "True"."\n";
    }
    else
    {
      print "False"."\n";
    }
  }

  end_other('Hiabc', 'abc');
  end_other('AbC', 'HiaBc');
  end_other('abc', 'abXabc');
  end_other('abc', 'ABC');
  end_other('b', 'BC');

?>