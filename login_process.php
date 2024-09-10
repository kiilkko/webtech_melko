<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('includes/db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$remember = isset($_POST['remember']) ? $_POST['remember'] : '';
$go = $_POST['go'];

$sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        echo "Добро пожаловать, " . $row['login'];

        // Если установлен флаг "Запомнить", создаем cookies
        if ($remember) {
            // Сохраняем логин и пароль в cookies на 30 дней
            setcookie('login', $login, time() + (86400 * 30), "/"); // 86400 секунд = 1 день
            setcookie('pass', $pass, time() + (86400 * 30), "/");
        }
    }
} else {
    echo "Нет такого пользователя. Проверьте правильность написания логина и пароля.";
}

if (isset($go)){
    // Переход на другую страницу с помощью header()
    header('Location: http://localhost/login_form/.vscode/test.php');
    exit();
}

?>
