<?php

    
    // Создание файла
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $file = $_POST['file'];

        if (!file_exists($file)) {
            $fileName = fopen($file, 'w');

            if ($fileName) {
                fclose($fileName);
            };

            echo "Создан файл с названием: $fileName<br>";
        };

    };

    // Удаление файла
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
        $file = $_POST['file'];

        if (file_exists($file)) {
            unlink($file);
            echo "Файл '$file' удален";
        } else {
            echo "Такого файла несуществует";
        };
    }

    // Переименование файла
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    $file = $_POST['file'];
    $newFile = $_POST['newFile'];

    if (!file_exists($newFile)) {
        if (file_exists($file)) {
            rename($file, $newFile);
            echo "Файл успешно переименован";
        } else {
            echo "Исходный файл не существует";
        }
    } else {
        echo "Файл с таким именем уже существует";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="txt" name="file" placeholder="Введите название файла">

        <button type="submit" name="submit" value="1">Создать файл</button>

        <button type="submit" name="delete" value="1">Удалить файл</button>

        <input type="txt" name="newFile" placeholder="Введите новое название файла">
        <button type="submit" name="edit" value="1">Переименоать файл файл</button>
    </form>
</body>
</html>
