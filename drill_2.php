<!-- ドリル_Ruby問題 2 2重ハッシュ

問題 Ruby文法をPHPに変更
<Ruby文法>
配列の内部に、複数のユーザーの情報をハッシュとして持つ変数user_dataがあります。
user_data = [
 {user: {profile: {name: 'George'}}},
 {user: {profile: {name: 'Alice'}}},
 {user: {profile: {name: 'Taro'}}},
]
user_dataを利用して、全てのユーザーの名前だけが出力されるようにRubyでコーディングしてください。
ただし、出力結果は次のようになるものとします。
George
Alice
Taro -->

<?php
  $user_data = [['user' => ['profile' => ['name' => 'George']]],
                ['user' => ['profile' => ['name' => 'Alice']]],
                ['user' => ['profile' => ['name' => 'Taro']]]];

  foreach($user_data as $data)
  {
    print $data['user']['profile']['name']."\n";
  }

?>
