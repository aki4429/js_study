<?php
declare(strict_types = 1);
$user = [
  'name'=>'山田',
  'age'=> 32,
  'isMember'=> true
];

echo $user['name'], PHP_EOL ;
echo $user['age'], PHP_EOL ;
echo $user['isMember'], PHP_EOL ;

$users = [
  [ 'name'=> '佐藤', 'age'=> 28 ],
  [ 'name'=> '鈴木', 'age'=> 35 ],
  [ 'name'=> '田中', 'age'=> 24 ]
];

foreach( $users as $usr) {
  echo $usr['name'] . "さんは" . $usr['age'] . "歳です", PHP_EOL;
}
?>