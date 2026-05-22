<?php
$students = [
    [
        'name' => 'Анна',
        'age' => 20,
        'grades' => [5, 4, 5]
    ],
    [
        'name' => 'Иван',
        'age' => 21,
        'grades' => [3, 4, 5]
    ]
];

echo '<table border="1" cellpadding="8" cellspacing="0">';
echo '<tr><th>Имя</th><th>Возраст</th><th>Средний балл</th></tr>';

foreach ($students as $student) {
    $average = round(array_sum($student['grades']) / count($student['grades']), 2);
    echo '<tr>';
    echo "<td>{$student['name']}</td>";
    echo "<td>{$student['age']}</td>";
    echo "<td>{$average}</td>";
    echo '</tr>';
}

echo '</table>';
