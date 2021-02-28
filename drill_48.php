<!-- ドリル_Ruby問題 48 日付と曜日を出力する
問題.
今日の日付と曜日を出力するコードを作りましょう
出力例：
現在は西暦2020年5月27日（今日の日付が入ります）
水曜日です（今日の曜日が入ります）
ヒント
Time.newメソッドを使用しましょう
 Timeクラス
TimeクラスはRubyの標準ライブラリにあり、時刻を表すクラスです。
以下のように利用します。
# 現在時刻
now = Time.new
puts now -->

<?php

  $week_day = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];

  $today = getdate();

  print "現在は西暦".$today['year']."年".$today['mon']."月".$today['mday']."日"."\n";
  print $week_day[$today['wday']]."です"."\n";

?>