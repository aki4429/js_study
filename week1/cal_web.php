<?php
declare(strict_types=1);

// 年月を取得
$year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
$month = filter_input(INPUT_GET, 'month', FILTER_VALIDATE_INT);


$weeks = ['日','月','火','水','木','金','土'];
if(!isset($month)) {
$dt = new DateTime(); //月のセットが無ければ、今日のデータ
$year = $dt->format('Y');
$month = $dt->format('n');
$dt = new DateTime("{$year}-{$month}-1");
}else {
$dt = new DateTime("{$year}-{$month}-1");
};
$last =  (int)$dt->format("t") ;
$first_week_day = (int)$dt->format("w");

ob_start();                        // 表にするのでバッファに書く
//確認用内容表示
printf("<p>年月データ %d 年 %d 月</p>\n", $year, $month);
echo "<p>月の日数 :", $last, "<p>", PHP_EOL;
echo "<p>1日の曜日数 :", $first_week_day, "<p>", PHP_EOL;

// ヘッダ出力
echo "<h2>{$year}年 {$month}月 カレンダー </h2>", PHP_EOL;
echo "<table><tr>";
$tdWeeks=array_map(fn($v) => "<td>{$v}</td>", $weeks);
echo implode('', $tdWeeks);
echo "</tr>", PHP_EOL;
// カレンダー生成
echo "<tr>";
$line = str_repeat("<td></td>", $first_week_day);   // 1日までの空白

for ($d = 1; $d <= $last; $d++) {
  $line .= "<td>" . (string)$d . "</td>" ;
  if (($first_week_day + $d) % 7 === 0 || $d === $last) {
    $line .= "</tr>";
    echo $line, PHP_EOL;
    $line = '<tr>';
  }
}
echo "</table>" ;
$html = ob_get_clean();
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8" />
  <style>
  table {
    border-collapse: collapse;
    margin-top: 1rem;
  }

  th,
  td {
    border: 1px solid #666;
    width: 2.5rem;
    height: 2rem;
    text-align: right;
  }

  caption {
    font-weight: bold;
    margin-bottom: .4rem;
  }
  </style>
  <title>カレンダー表示</title>

  <head>

  <body>
    <form method="GET">
      <label>西暦を入力してください。(ex. 2025) :
        <input name="year" type="number" min="0">
      </label>
      <br>
      <label>月を入力してください。(ex. 6) :
        <input name="month" type="number" min="0">
      </label>
      <br>
      <button>カレンダー表示</button>
    </form>
    <?= $html ?>
  </body>