<?php
declare(strict_types=1);

$fruits = ['りんご', 'みかん', 'ぶどう'];

echo "先頭: {$fruits[0]}\n";
echo "要素数: " . count($fruits) . "\n\n";

/* 一覧表示 */
foreach ($fruits as $i => $v) {
    echo ($i + 1) . ". $v\n";
}

/* 末尾に追加 */
$fruits[] = 'バナナ';           // push
echo "\nafter push  : ", implode(', ', $fruits), "\n";

/* 末尾を削除 */
echo "popped       : ", array_pop($fruits), "\n";

/* 先頭に追加 */
array_unshift($fruits, 'もも');
echo "after unshift: ", implode(', ', $fruits), "\n";

/* 先頭を削除 */
echo "shifted      : ", array_shift($fruits), "\n";
echo "final        : ", implode(', ', $fruits), "\n";