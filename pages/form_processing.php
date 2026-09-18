<?php
// Получение данных из адресной строки (суперглобальный массив $_GET)
$data1 = (isset($_GET['p'])) ? $_GET['p'] : "Данные отсутствуют";
$data2 = (isset($_GET['do'])) ? $_GET['do'] : "Данные отсутствуют";

print_r($data1); echo "<br><br>";
print_r($data2); echo "<br><br>";

// strip_tag() - удаляет html теги
// htmlspecialchars() - заменяет спец символы на их html-код
// htmlentities() - экранизация данных

$login = (isset($_POST['login'])) ? strip_tags($_POST['login']) : "Логин отсутствуют";
$password = (isset($_POST['pass'])) ? (htmlspecialchars(htmlentities($_POST['pass']))) : "Пароль отсутствует";



if ( (isset($_POST['login'])) && (isset($_POST['pass'])) ) {
    echo "Ваш логин: {$login}, ваш пароль: {$password}";
} else {
    echo '
    <form action="index.php?p=form_processing" method="POST">
    <div>
        <label for="login">Логин</label>
        <input id="login" name="login" type="text" placeholder="Введите ваш логин"
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" name="pass" type="password" placeholder="Введите ваш пароль" >
    </div>
    <div>
        <button type="reset">Сброс данных</button>
        <button type="submit">Отправить данные</button>
    </div>
</form>
';
}


$users = isset($_POST["users"]) ? $_POST["users"] : [];
echo "В массиве USERS " . count($users) . " элементов <br>";
foreach ($users as $user) {
    echo $user . "<br>";
}
echo '
<form action="index.php?p=form_processing" method="POST">
    <input type="text" name="users[]">
    <input type="text" name="users[]">
    <input type="text" name="users[]">
    <button type="submit">Отправить</button>
</form>
';



$sex = isset($_POST['sex']) ? $_POST['sex'] : "ХЗ";
echo "Ваш пол: {$sex} - 11 -" . ( ($sex === 1) ? "Мужской" : "Женский" );

echo '
<form action="index.php?p=form_processing" method="POST">
    <input type="radio" name="sex" value="1">Мужской
    <input type="radio" name="sex" value="0">Женский
    
    <input type="checkbox" name="vkusnyash[]" value="Мороженое">Мороженое
    <input type="checkbox" name="vkusnyash[]" value="Мороженое">Пивасик
    <input type="checkbox" name="vkusnyash[]" value="Мороженое">Конфетка
    <input type="checkbox" name="vkusnyash[]" value="Мороженое">Газировка
    
    <select name="spisok" multiple="multiple">
        <option value="ТЭПК">ОГБПОУ ТЭПК</option>
        <option value="ТТИТ">ОГБПОУ ТТИТ</option>
        <option value="ТомИнТех">ТомИнТех</option>
    </select>
    <button type="submit">Отправить</button>
</form>
';