<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .in-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .in-container a {
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin-right: 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.3s ease;
            
        }

        .in-container a:hover {
            background-color: lightgray;
        }
        .greeting-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 420px;
            color: black;
            outline: none;
            border-radius: 10px;
            padding: 30px 40px;
        }

    </style>

</head>
<body>
    <div class="wrapper_gre">  
        <h1>Добро пожаловать!</h1><br>
        <div class="greeting-container">На этом сайте вы найдете фотогалерею с возможностью загрузки и удаления изображений и
            тест по основам веб-программирования. После прохождения теста, он выдаст вам количество правильных и неправильных ответов. Для входа на сайт необходима регистрация.
        </div>

        <div class="in-container">
            <a href="http://localhost/login_form/.vscode/register.php">Зарегистрироваться</a>
            <a href="http://localhost/login_form/.vscode/login.php">Войти</a>
        </div>
        </div>

</body>
</html>
