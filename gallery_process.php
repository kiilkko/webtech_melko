<?php
// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Директория для загрузки
    $target_dir = "uploads/";
    
    // Получаем информацию о файле
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Проверяем, была ли ошибка при загрузке файла
    if ($_FILES["photo"]["error"] !== UPLOAD_ERR_OK) {
        echo "Ошибка при загрузке файла: " . $_FILES["photo"]["error"];
        exit();
    }

    // Проверка на тип файла (разрешены JPG, JPEG, PNG, GIF)
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        echo "Извините, разрешены только файлы форматов JPG, JPEG, PNG и GIF.";
        exit;
    }

    // Проверка на ошибки при загрузке
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "Файл " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " был загружен.";
    } else {
        echo "Произошла ошибка при загрузке файла.";
    }

    // Перенаправление назад на галерею
    header("Location: gallery.php");
}
?>
