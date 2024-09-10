<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_register</title>
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

        <form action="register_process.php" method="post">
            <h1>Регистрация</h1>
            <div class="input-box"> 
                <input type="login" placeholder="Логин" name="login" required>              
            </div>
            <div class="input-box">
                <input type="password" placeholder="Пароль" name="pass" required>                
            </div>
            <div class="input-box">
                <input type="password" placeholder="Повторите пароль"  name="repeatpass" required>                
            </div>
            <div class="input-box">
                <input type="text" placeholder="E-mail"  name="email" required>                
            </div>

            <button type="submit" class="btn">Зарегистрироваться</button>

            <div class="register-link">
                <p>Уже зарегистрированы? <a href="login.php">Войти</a></p>  
            </div>
                          
        </form>
        </div>

</body>
</html>
