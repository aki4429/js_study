<?php
declare(strict_types=1);

$user = ['name'=>'山田', 'age'=>32, 'isMember'=>true];
printf("%s (%d) - member: %s\n",
       $user['name'], $user['age'], $user['isMember'] ? 'yes' : 'no');

$users = [
  ['name'=>'佐藤','age'=>28],
  ['name'=>'鈴木','age'=>35],
  ['name'=>'田中','age'=>24],
];

foreach ($users as ['name'=>$name, 'age'=>$age]) {
    echo "{$name} さんは {$age} 歳です\n";
}