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
<p>Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.</p>
<br><br>
<form action="5.php" method="post">
    <input type="text" name="dir" placeholder="Enter dir">
    <br><br>
    <input type="text" name="word" placeholder="Enter word">
    <br><br>
    <input type="submit" value="Send">
</form>
</body>
</html>


<?php

/*Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.*/

if (!empty($_POST['dir']) && !empty($_POST['word'])) {
    $dir = $_POST['dir'];
    $word = $_POST['word'];
} else $dir = $word = NULL;



function open($dir, $word)
{
    if ($dir != NULL && $word != NULL) {
        $dir = scandir($dir);
        foreach ($dir as $item) {
            if (strripos($item, $word)) {
                echo "<pre>";
                echo $item;
            }
        }
    } else echo "<br>Введите данные!";
}

open($dir, $word);




























