<?php
declare(strict_types=1);

/* ---------- 入力取得 ---------- */
$opt = ['options' => ['default' => null], 'flags' => FILTER_NULL_ON_FAILURE];
$num1 = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_FLOAT, $opt);
$num2 = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_FLOAT, $opt);
$calc = $_GET['calc'] ?? null;

/* ---------- 演算マップ ---------- */
$ops = [
  'add' => fn($a, $b) => $a + $b,
  'sub' => fn($a, $b) => $a - $b,
  'mul' => fn($a, $b) => $a * $b,
  'div' => fn($a, $b) => $b == 0 ? '÷0 は不可' : $a / $b,
];

/* ---------- 計算 ---------- */
$result = '―';                        // デフォルト表示
if (
    isset($ops[$calc]) &&
    $num1 !== null && $num2 !== null   // false も null も弾く
) {
    $result = $ops[$calc]($num1, $num2);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>シンプル電卓</title>
</head>

<body>
  <h2>シンプル電卓</h2>

  <form method="GET">
    <input name="num1" type="number" step="any" value="<?= htmlspecialchars((string)($num1 ?? '')) ?>">
    <input name="num2" type="number" step="any" value="<?= htmlspecialchars((string)($num2 ?? '')) ?>">

    <select name="calc">
      <?php foreach (['add'=>'＋','sub'=>'−','mul'=>'×','div'=>'÷'] as $k=>$label): ?>
      <option value="<?= $k ?>" <?= $calc===$k?'selected':'' ?>><?= $label ?></option>
      <?php endforeach; ?>
    </select>

    <button type="submit">計算</button>
  </form>

  <p>結果: <?= $result ?></p>
</body>

</html>