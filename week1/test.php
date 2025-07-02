<?php
$a = [ 'one' => fn($x)=>$x*2 ];

echo $a['one'](2), PHP_EOL;

echo date('Y'), '/', date('n'), '/', date('d'), PHP_EOL;