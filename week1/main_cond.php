<?php
declare(strict_types=1);

$age = (int) readline('年齢を入力してください: ');

if ($age >= 20) {
    echo "飲酒OK 🍻" . PHP_EOL;
} elseif ($age >= 0) {
    echo "未成年 🚫" . PHP_EOL;
} else {
    echo "数字を入力してね" . PHP_EOL;
}

// switch 練習：曜日メッセージ
$day = (int) date('w');  // 0=Sun
switch ($day) {
    case 0:
        echo "日曜はゆっくり" . PHP_EOL;
        break;
    case 1:
        echo "月曜スタート!" . PHP_EOL;
        break;
    default:
        echo "平日ファイト" . PHP_EOL;
}
