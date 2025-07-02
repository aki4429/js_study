<?php
declare(strict_types=1);

// 年月を取得
$num_1 = filter_input(INPUT_GET, 'num_1', FILTER_VALIDATE_INT);
$num_2 = filter_input(INPUT_GET, 'num_2', FILTER_VALIDATE_INT);
$calc = $_GET['calc'] ?? null; 

$func = ['add' => fn($a, $b) => $a + $b,
          'sub' => fn($a, $b) => $a - $b,
          'mul' => fn($a, $b) => $a * $b,
          'div' => fn($a, $b) => $a / $b,
];

if($result){
$result = $func[$calc]($num_1, $num_2);
}else{
  $result='';
};


?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8" />
  <title>シンプル電</title>

  <head>

  <body>
    <h2> シンプル電卓 </h2>
    <p> 数値をいれて、計算ボタンをクリックしてください。</p>
    <form method="GET">
      <label>
        <input name="num_1" type="number">
      </label>
      <br>
      <label>
        <input name="num_2" type="number">
      </label>
      <select name="calc">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">X</option>
        <option value="div">&divide;</option>
      </select>


    </form>
    答えは：<?= $result ?>
  </body>