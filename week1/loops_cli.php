<?php
declare(strict_types=1);

/* -------- FizzBuzz -------- */
for ($i = 1; $i <= 100; $i++) {
    $out = '';
    if ($i % 3 === 0) $out .= 'Fizz';
    if ($i % 5 === 0) $out .= 'Buzz';
    echo ($out ?: $i) . PHP_EOL;
}

/* -------- 九九表 -------- */
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        printf("%2d ", $i * $j);
    }
    echo PHP_EOL;
}