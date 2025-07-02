<?php
declare(strict_types=1);

/* ---------- 入力値を取得（未入力なら今日日付） ---------- */
$y = filter_input(INPUT_GET, 'year',  FILTER_VALIDATE_INT) ?: (int)date('Y');
$m = filter_input(INPUT_GET, 'month', FILTER_VALIDATE_INT) ?: (int)date('n');

$dt      = new DateTimeImmutable("$y-$m-01");
$weeks   = ['日','月','火','水','木','金','土'];
$firstW  = (int)$dt->format('w');
$lastDay = (int)$dt->format('t');

/* ---------- 表 HTML を組み立て ---------- */
ob_start();
?>
<table class="w-full table-fixed border-collapse text-center">
  <caption class="mb-2 text-xl font-semibold"><?= $y ?> 年 <?= $m ?> 月</caption>
  <thead>
    <tr class="bg-slate-200">
      <?php foreach ($weeks as $w): ?>
      <th class="p-1 border"><?= $w ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody class="divide-y">
    <tr>
      <?= str_repeat('<td class="p-1 border"></td>', $firstW) ?>
      <?php
        $col = $firstW;
        for ($d = 1; $d <= $lastDay; $d++, $col++) {
            echo '<td class="p-1 border">'. $d .'</td>';
            if ($col % 7 === 6 && $d !== $lastDay) {
                echo '</tr><tr>';
            }
        }
      ?>
    </tr>
  </tbody>
</table>
<?php
$calendar = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Tailwind 月カレンダー</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="robots" content="noindex, nofollow">
</head>

<body class="bg-gray-100 flex flex-col items-center min-h-screen p-6">

  <!-- 入力フォーム -->
  <form method="GET" class="w-full max-w-md bg-white shadow-md rounded-lg p-6 space-y-4 mb-8">
    <h2 class="text-lg font-semibold text-center">年月を入力してください</h2>

    <div class="flex gap-3">
      <input name="year" type="number" min="1900" step="1" placeholder="例: 2025"
        value="<?= htmlspecialchars((string)$y) ?>"
        class="flex-1 rounded border border-gray-300 p-2 focus:ring-2 focus:ring-blue-400">
      <input name="month" type="number" min="1" max="12" step="1" placeholder="月"
        value="<?= htmlspecialchars((string)$m) ?>"
        class="w-24 rounded border border-gray-300 p-2 focus:ring-2 focus:ring-blue-400">
    </div>

    <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
      カレンダー表示
    </button>
  </form>

  <!-- カレンダー -->
  <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-4">
    <?= $calendar ?>
  </div>

</body>

</html>