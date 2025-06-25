<?php
$age = $_GET['age'] ?? null;
// $age = $_POST['age'] ?? null;
?>
<!DOCTYPE html>
<meta charset="utf-8" />
<title>条件分岐テスト</title>

<form method="GET">
  <label>年齢:
    <input name="age" type="number" min="0" />
  </label>
  <button>判定</button>
</form>

<?php if ($age !== null): ?>
  <p>
  <?php
    if ($age >= 20)      echo '飲酒OK 🍻';
    elseif ($age >= 0)   echo '未成年 🚫';
    else                 echo '数字を入力してね';
  ?>
  </p>
<?php endif; ?>
