<?php
declare(strict_types=1);
$opt  = ['options'=>['default'=>null],'flags'=>FILTER_NULL_ON_FAILURE];
$num1 = filter_input(INPUT_GET,'num1',FILTER_VALIDATE_FLOAT,$opt);
$num2 = filter_input(INPUT_GET,'num2',FILTER_VALIDATE_FLOAT,$opt);
$calc = $_GET['calc'] ?? null;
$ops  = [
  'add'=>fn($a,$b)=>$a+$b,
  'sub'=>fn($a,$b)=>$a-$b,
  'mul'=>fn($a,$b)=>$a*$b,
  'div'=>fn($a,$b)=>$b==0? '∞' : $a/$b,
];
$result = ($calc && $num1!==null && $num2!==null && isset($ops[$calc]))
        ? $ops[$calc]($num1,$num2) : '—';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Tailwind 電卓</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-start justify-center min-h-screen pt-10">
  <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-6 space-y-6">
    <h1 class="text-2xl font-bold text-center">シンプル電卓</h1>

    <form method="GET" class="space-y-4">
      <div class="flex gap-2">
        <input name="num1" type="number" step="any" value="<?= htmlspecialchars((string)($num1??'')) ?>"
          class="flex-1 rounded border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          placeholder="数値1">
        <input name="num2" type="number" step="any" value="<?= htmlspecialchars((string)($num2??'')) ?>"
          class="flex-1 rounded border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          placeholder="数値2">
      </div>

      <select name="calc"
        class="w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        <?php foreach(['add'=>'＋','sub'=>'−','mul'=>'×','div'=>'÷'] as $k=>$label): ?>
        <option value="<?= $k ?>" <?= $calc===$k?'selected':'' ?>><?= $label ?></option>
        <?php endforeach; ?>
      </select>

      <button type="submit"
        class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">
        計算
      </button>
    </form>

    <p class="text-center text-xl font-semibold">
      結果: <span class="text-blue-600"><?= htmlspecialchars((string)$result) ?></span>
    </p>
  </div>
</body>

</html>