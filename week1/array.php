<?php
declare(strict_types = 1);

$fruits = ['りんご', 'みかん', 'ぶどう'];
echo $fruits[0], PHP_EOL; // りんご
echo count($fruits), PHP_EOL; // 3

foreach($fruits as $v){
  echo $v, PHP_EOL;
};

array_push($fruits, 'バナナ');    // 末尾に追加
print_r($fruits);
array_pop($fruits);    // 末尾から削
print_r($fruits);
array_unshift($fruits, 'もも');    // 先頭に追加
print_r($fruits);
array_shift($fruits);    // 先頭から削除
print_r($fruits);
?>