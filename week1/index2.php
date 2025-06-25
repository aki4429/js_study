<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP Test</h1>

  <?php
require_once __DIR__ . '/main.php';  // ← 外部ファイルを読み込む
echo 'require_once を実行' ;
?>

 
</body>
</html>