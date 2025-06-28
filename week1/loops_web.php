<?php
declare(strict_types=1);
ob_start();                        // 表にするのでバッファに書く
echo "<table border='1'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
$html = ob_get_clean();
?>
<!DOCTYPE html>
<meta charset="utf-8">
<title>PHP ループ</title>
<?= $html ?>