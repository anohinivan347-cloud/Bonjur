<?php
$var1 = null;
$var2 = true;
$var3 = fopen('php://memory', 'r');
$var4 = "123";

$variables = [
    'var1' => $var1,
    'var2' => $var2,
    'var3' => $var3,
    'var4' => $var4
];

foreach ($variables as $name => $value) {
    echo "$name: isset = ";
    echo isset($value) ? 'true' : 'false';
    echo ", type = " . gettype($value) . "<br>";
}

$sum = (int)$var4 + 10;
echo "Результат var4 + 10: $sum";

if (is_resource($var3)) {
    fclose($var3);
}
