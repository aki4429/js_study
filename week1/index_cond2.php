<?php
declare(strict_types=1);

// ロジックを読み込む（必須なので require_once 推奨）
require_once __DIR__ . '/age_checker.php';

$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
// $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
$message = null;

if ($age !== null) {
    $message = ageMessage($age);
}
?>
<!DOCTYPE html>
<meta charset="utf-8" />
<title>年齢判定フォーム</title>

<form method="POST">
  <label>年齢:
    <input name="age" type="number" min="0">
  </label>
  <button>判定</button>
</form>

<?php if ($message): ?>
  <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>
