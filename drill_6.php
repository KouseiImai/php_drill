<!-- ドリル_Ruby問題 6 引数の基礎
問題.Ruby→PHPに書き換え
"晴れ" という文字列を引数で渡した時に
明日の天気は晴れです
とターミナルに表示されるようなメソッドを作成してください。
呼び出し方：get_weather_forecast(“晴れ”) -->

<?php
  function get_weather_forecast($weather)
  {
    print "明日の天気は".$weather."です"."\n";
  }

  get_weather_forecast("晴れ");
?>