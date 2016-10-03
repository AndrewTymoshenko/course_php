<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?="Написать функцию, которая выводит список файлов в заданной директории.
Директория задается как параметр функции."?>
<br><br>
<form action="4.php" method="post">
    <input type="text" name="text">
    <input type="submit" value="Send">
</form>
</body>
</html>

<?php

/*Написать функцию, которая выводит список файлов в заданной директории.
Директория задается как параметр функции.*/


if (!empty($_POST['text'])) {
    $text = $_POST['text'];
} else $text = NULL;


function open($text)
{
    if ($text != NULL) {
        $dir = scandir($text);
        echo "<pre>";
        print_r($dir);
    } else echo "Введите директорию!";
}

open($text);