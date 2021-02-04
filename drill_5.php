<!-- ドリル_Ruby問題 5 メソッドの使い方
問題.Ruby→PHPへの書き換え
以下のプログラムを実行するとエラーが起きます。
①エラーが起きた原因
②正しいソースコード（引数を用いたコードにしましょう）
をそれぞれ答えてください。
price = 300
def calculate_price_with_tax
  tax = 0.1
  return price + price * tax
end
calculate_price_with_tax -->

<!-- ①エラーが起きた原因
  メソッドの外側で定義した変数は、メソッドの内側では使えない。
  そのため、1行目のpriceはcalculate_price_with_taxメソッドの中では使えずにエラーが起きてしまった。
-->

<!-- ②正しいソースコード -->

<?php

  $price = 300;

  function calculate_price_with_tax($price)
  {
    $tax = 0.1;
    return $price + $price * $tax;
  }

  echo calculate_price_with_tax($price),"円", "\n";

?>
