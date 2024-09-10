<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_POST['file'];

    // Проверяем, существует ли файл
    if (file_exists($file)) {
        // Удаляем файл
        unlink($file);
        echo "Файл был удален.";
    } else {
        echo "Файл не найден.";
    }

    // Перенаправление назад на галерею
    header("Location: gallery.php");
}
?>
