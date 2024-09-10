<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

// Проверка на корректность логина: не более 20 символов, только латинские буквы, цифры, _, -
if (!preg_match('/^[a-zA-Z0-9_-]{1,20}$/', $login)) {
    echo "Login must be up to 20 characters long and may only contain letters, numbers, underscores, and hyphens.";
    exit();
}

// Проверка на длину пароля: от 6 до 20 символов
if (strlen($pass) < 6 || strlen($pass) > 20) {
    echo "Password must be between 6 and 20 characters long.";
    exit();
}

// Проверка на совпадение паролей
if ($pass != $repeatpass) {
    echo "Passwords do not match!";
    exit();
}

// Если все проверки пройдены, выполняем SQL запрос
$sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
if ($conn->query($sql)) {
    echo "Successful registration!";
} else {
    echo "Error: " . $conn->error;
}

?>

