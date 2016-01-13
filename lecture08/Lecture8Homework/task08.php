<?php

// Задача 8:
// Да се състави програма, чрез която се въвежда ред от символи
// (стринг, низ).
// Програмата да изведе на екрана дали въведения стринг е палиндром,
// т.е. дали четен отляво-надясно и отдясно-наляво е един и същ.
// Вход: капак
// Изход: да.
// Вход: тенджера
// Изход: не.

require_once 'readline.php';

$str = readline('Въведете ред от символи: ');

$result = 'Да.';

for ($i = 0; $i < floor(mb_strlen($str) / 2); $i++) {
	if ($str{$i} !== $str{mb_strlen($str) - $i - 1}) {
		$result = 'Не.';
		break;
	}
}

echo $result;