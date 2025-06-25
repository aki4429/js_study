
<?php
// lib/age_checker.php
declare(strict_types=1);

function ageMessage(int $age): string
{
    if ($age >= 20) {
        return '飲酒OK 🍻';
    }
    if ($age >= 0) {
        return '未成年 🚫';
    }
    return '数字を入力してね';
}
