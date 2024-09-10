<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .nav-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .nav-container a {
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

        .nav-container a:hover {
            background-color: lightgray;
        }
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery-item {
            margin: 15px;
            position: relative;
        }

        .gallery-item img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .upload-container {
            text-align: center;
            margin: 30px 0;
        }

        .upload-container input[type="file"] {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<!-- Навигационные кнопки -->
    <div class="nav-container">
        <a href="http://localhost/login_form/.vscode/test.php">Тест</a>
        <a href="http://localhost/login_form/.vscode/gallery.php">Галерея</a>
        <a href="http://localhost/login_form/.vscode/login.php">Выход</a>
    </div>

    <div class="wrapper_gal">
        <h1>Фотогалерея</h1>

        <!-- Форма загрузки фото -->
        <div class="upload-container">
            <form action="gallery_process.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" required>
                <button type="submit" class="btn">Загрузить фото</button>
            </form>
        </div>

        <!-- Галерея фотографий -->
        <div class="gallery-container">
            <?php
                // Показ загруженных фотографий
                $files = glob('uploads/*.*'); // Путь к папке с изображениями
                foreach($files as $file) {
                    echo '<div class="gallery-item">';
                    echo '<img src="' . $file . '" alt="Фото">';
                    echo '<form action="delete.php" method="POST" style="display:inline;">';
                    echo '<input type="hidden" name="file" value="' . $file . '">';
                    echo '<button type="submit" class="delete-btn">Удалить</button>';
                    echo '</form>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>
