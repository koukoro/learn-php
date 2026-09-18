<?php
$num1 = 1;

if ($num1 === 1) {
    echo 'variant 1';
} elseif ($num1 === 2) {
    echo 'variant 2';
} elseif ($num1 === 3) {
    echo 'variant 3';
} else {
    echo 'variant not supported';
}

$num2 = 1;

switch ($num2) {
    case 1:
        echo 'variant 1';
        break;
    case 2:
        echo 'variant 2';
        break;
    case 3:
        echo 'variant 3';
        break;
    default:
        echo 'variant not supported';
        break;
}

/*
 match (переменная) {
		значение1 => результат1,
		значение2 => результат3,
		значение3 => результат3,
		default => значение по умолчанию
	}
 */

$lang = 'ru';

$res = match ($lang) {
    'ru' => '111',
    'en' => '222',
    'de' => '333',
    default => 'unsupported language'
};

echo $res;

$age = 17;

if ($age >= 18) {
    $adult = true;
} else {
    $adult = false;
}

var_dump($adult);

$adult2 = $age >= 18 ? true: false;
var_dump($adult2);

$user = ['name' => 'john', 'age' => 30];
$name = $user['name'] ?? 'unknown';

$a = 2 * (3 - 1);
$b = 6 - 2;
$sum = $a == $b;

$min = 10;

if ($min >= 0 and $min <= 20) {
    echo '1 quarter';
}

if ($min >= 21 and $min <= 42) {
    echo '2 quarter';
}

if ($min >= 43 and $min <= 59) {
    echo '3 quarter';
}

$arr25 = [1, 2, 3];

if (count($arr25) >= 3) {
    echo array_sum($arr25);
}

$mounth1 = 5;
switch ($mounth1) {
    case 1:
        echo 'Январь';
        break;
    case 2:
        echo 'Февраль';
        break;
    case 3:
        echo 'Март';
        break;
    case 4:
        echo 'Апрель';
        break;
    case 5:
        echo 'Май';
        break;
    case 6:
        echo 'Июнь';
        break;
    case 7:
        echo 'Июль';
        break;
    case 8:
        echo 'Август';
        break;
    case 9:
        echo 'Сентябрь';
        break;
    case 10:
        echo 'Октябрь';
        break;
    case 11:
        echo 'Ноябрь';
        break;
    case 12:
        echo 'Декабрь';
        break;
}

$stroka = "abcde";
echo $stroka[0] == 'a';

$stroka2 = 12345;
$stringi = (string)$stroka2;
if ($stringi[0] == 1 or $stringi[0] == 2 or $stringi[0] == 3) {
    echo 'Первая цифра равна 1, 2 или 3';
} else {
    echo 'Первая цифра не равна 1, 2 или 3';
}

$arr77 = [1, 2, 3, 4, 5];
foreach ($arr77 as $elem77) {
    echo $elem77;
}