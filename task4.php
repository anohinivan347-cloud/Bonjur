<?php
$fruits = ['Яблоко', 'Банан', 'Груша'];
echo "Второй элемент массива фруктов: {$fruits[1]}<br>";

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2020,
    'color' => 'red'
];

echo "Автомобиль {$car['brand']} {$car['model']} {$car['year']} года, цвет {$car['color']}.<br>";

$car['price'] = 25000;

echo '<pre>';
print_r($car);
echo '</pre>';
