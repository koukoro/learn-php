<?php
    // Функции
function Hello()
{
    echo "<br> Hello world! <br>";
}

function Summa($a, $b)
{
    return $a + $b;
}
// Вызов функции
Hello();
// $summa = Summa(2,3);
echo summa(2, 3);

function displayInfo($name, $age = 18)
{
    echo "<p>Имя: {$name}, возраст {$age}</p>";
}
displayInfo("Даниил", 17);
displayInfo("Станислав");

// Именованные параметры
displayInfo(age: 38, name: "Василий");

function test($name, $age, $sex, $surname)
{
    echo "<p>Фамилия: {$surname}, имя: {$name}, возраст: {$age}, пол: {$sex}</p>";
}

test("Никита", 17, surname: "Казаков", sex: "Мужской");

// Переменное количество параметров
// Оператор ... (оператор распаковки): упаковка аргументов в обычный массив, распаковка массива

function displayUsers(...$names)
{
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}

displayUsers("Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор", "Даниил", "Данил", "Никита");

function displayUsers2($prepod, ...$names) {
    echo "<p>{$prepod}</p>";
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}

displayUsers2("Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор", "Даниил", "Данил", "Никита",);

function displayUsers3($prepod, ...$names) {
    echo "<p>Преподователь: {$prepod}</p> Студенты:";
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}
displayUsers3("Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор", "Даниил", "Данил", "Никита",);

// Анонимные функции
$hi = function ($name) {
    echo "<p>Приветствую вас, {$name}</p>";
};
// Вызов анонимной функции
$hi("товарищ Сталин");

// Замыкание

$number = 1005;
$name = "Алик";
$showNumber = function () use ($number, $name) {
    echo "<p>{$name} должен мне {$number} рубасиков</p>";
};
$showNumber();

function Info($number, $name)
{
    echo "<p>{$name} должен мне {$number} рубасиков</p>";
}
Info($number, $name);

// Стрелочные функции

$info = fn() => $name . " должен мне " . $number . " рубасиков ";
echo $info();

// Генераторы
function generator() {
    yield 18;
    yield 19;
    yield 20;
}

foreach (generator() as $value) {
    echo "<p>{$value}</p>";
}

print_r(iterator_to_array(generator()));

// Ссылки
$one = "Первое значение";
$two = &$one;
$two = "Второе значение";
echo $one;
echo $two;

function inf(&$b)
{
    echo $b *= 25;
}
$a = 10;
inf($a);
echo $a;

// глобальный массив позволяющий обращаться к переменным программы по их имени
echo $GLOBALS["two"];

// Константы
const PI = 3.14;
echo PI;

define("PII", 3.14);
echo PII;

// Магические константы
echo "<br>" . __FILE__ . " - хранит полный путь и имя текущего файла<br>";
echo "<br>" . __LINE__ . " - хранит текущий номер стороки, которую обрабатывает интерпритатор<br>";
echo "<br>" . __DIR__ . " - хранит каталог текущего файла<br>";

function f1()
{
    echo "<br>" . __FUNCTION__ . " - название обрабатываемой функции<br>";
}
f1();

echo "<br>" . __CLASS__ . " - название текущего класса<br>";
echo "<br>" . __TRAIT__ . " - название текущего трейта<br>";
echo "<br>" . __METHOD__ . " - название обрабатываемого метода<br>";
echo "<br>" . __NAMESPACE__ . " - название текущего пространства имён<br>";

if (__FILE__) {
    echo "Путь существует";
} else {
    echo "Путь не существует";
}

if (!__CLASS__) {
    echo "Класс не существует";
} else {
    echo "Класс существует";
}

// Проверка существования переменных
$a = null;
if (isset($a)) {
    echo "Переменная А существует и = {$a}";
}
// Проверка переменной на пустоту
if (empty($a)) {
    echo "Переменная A имеет пустое значение";
}
// Уничтожение переменных
unset($a);
// echo $a; - выдаст ошибку, так как переменной а не существует
?>