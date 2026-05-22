<?php
$name = "Мария";

$singleQuoted = 'В строке есть апостроф \' , обратный слэш \\ и символ $name без подстановки.';
echo $singleQuoted . "<br>";

$doubleQuoted = "$name Иванова\n";
echo nl2br($doubleQuoted);
