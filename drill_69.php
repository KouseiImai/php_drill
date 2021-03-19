<!-- ドリル_Ruby問題 69 曜日問題
問題
ある年、ある月、ある日の曜日を取得しましょう。
曜日は月曜日なら「月」、火曜日なら「火」というように表示してください。
ヒントとして、西暦1年1月1日は月曜日とします。
閏年を考えることもヒントの１つです。

雛形
作ってもらうプログラムのひな形は以下です。
def get_week(year, month, day)
  # ここに処理を書き加えてください
end

puts "年を入力してください："
year = gets.to_i
puts "月を入力してください："
month = gets.to_i
puts "日を入力してください："
day = gets.to_i

week = get_week(year, month, day)
puts "#{year}年#{month}月#{day}日は#{week}曜日です" -->

<?php

  function get_week($year, $month, $day)
  {
    $total_days = calc_total_days($year,$month, $day);
    $check_week = ($total_days -1) % 7;
    $weeks = ['日', '月', '火', '水', '木', '金', '土'];
    return $weeks[$check_week];
  }

  function calc_total_days($year, $month, $day)
  {
    $last_year       = $year - 1;
    $leap_year       = $last_year / 4;
    $normal_year     = $last_year - $leap_year;
    $this_year       = until_last_month($year, $month) + $day;
    $calc_total_days = $leap_year * 366 + $normal_year * 365 + $this_year;
    return $calc_total_days;
  }

  function until_last_month($year, $month)
  {
    $days = ['', 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    if($year % 4 == 0)
    {
      if($year % 100 != 0 && $year % 400 == 0)
      {
        $days[2] = 29;
      }
    }

    $last_month = $month -1;
    for($i = 1; $i <= $last_month; $i++)
    {
      $until_last_month += $days[$i];
    }
    return $until_last_month;
  }

  print "年を入力して下さい"."\n";
  $year = (integer)fgets(STDIN);
  print "月を入力して下さい"."\n";
  $month = (integer)fgets(STDIN);
  print "日を入力して下さい"."\n";
  $day = (integer)fgets(STDIN);

  $week = get_week($year, $month, $day);
  print $year."年".$month."月".$day."日は".$week."曜日です"."\n";

?>