<?php
declare(strict_types=1);

$year  = readline('年 > ');
while(!ctype_digit($year)){
  echo "数字を入力してください", PHP_EOL;
$year  = readline('年 > ');
};
$month = readline('月 (1-12) > ');
while(!ctype_digit($month)){
  echo "数字を入力してください", PHP_EOL;
$month = readline('月 (1-12) > ');
};
printf("入力値: %d 年 %d 月\n", $year, $month);

$weeks = ['日','月','火','水','木','金','土'];
$dt = new DateTime("{$year}-{$month}-1");
echo "月の日数 :", $dt->format("t"), PHP_EOL;;
$last =  (int)$dt->format("t") ;
$first_week_day = (int)$dt->format("w");

// ヘッダ出力
echo "= {$year}年 {$month}月 カレンダー =", PHP_EOL;
echo implode(' ', $weeks), PHP_EOL ;

// カレンダー生成
$line = str_repeat("   ", $first_week_day);   // 1日までの空白

for ($d = 1; $d <= $last; $d++) {
  $line .= str_pad((string)$d, 2, ' ', STR_PAD_LEFT) ;
  $line .= ' ';
  if (($first_week_day + $d) % 7 === 0 || $d === $last) {
    echo $line, PHP_EOL;
    $line = '';
  }
}