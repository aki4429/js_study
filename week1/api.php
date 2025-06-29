<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');

$y = filter_input(INPUT_GET,'y',FILTER_VALIDATE_INT);
$m = filter_input(INPUT_GET,'m',FILTER_VALIDATE_INT);
if (!$y || !$m || $m < 1 || $m > 12) {
    http_response_code(400);
    echo json_encode(['error'=>'bad request']);
    exit;
}
$dt   = new DateTimeImmutable("$y-$m-01");
echo json_encode([
    'year'         => (int)$y,
    'month'        => (int)$m,
    'firstWeekday' => (int)$dt->format('w'),
    'lastDay'      => (int)$dt->format('t')
], JSON_UNESCAPED_UNICODE);