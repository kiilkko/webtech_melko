<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')>

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
</style>

</head>
<body>
    <div class="in-container">
            <a href="http://localhost/login_form/.vscode/index.php">Главная</a>
    </div>
    <div class="wrapper">  
        <form action="login_process.php" method="POST">
            <h1>Вход</h1>
            <div class="input-box"> 
                <input type="login" placeholder="Логин" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : ''; ?>" required>          
            </div>
            <div class="input-box">
                <input type="password" placeholder="Пароль" name="pass" value="<?php echo isset($_COOKIE['pass']) ? $_COOKIE['pass'] : ''; ?>" required>             
            </div>
            <div class="remember">
                <label> <input type="checkbox" name="remember" <?php echo isset($_COOKIE['login']) ? 'checked' : ''; ?>> Запомнить</label>
            </div>

            <button type="submit" class="btn" name="go">Войти</button>
            <div class="register-link">
                <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>  
            </div>
                          
        </form>
    
        </div>

</body>
</html>
