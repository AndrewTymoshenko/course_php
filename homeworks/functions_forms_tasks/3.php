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
<p>Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.</p>
<hr>
<form action="3.php" method="post">
    <input type="text" name="addr" placeholder="Enter file address">
    <br><br>
    <input type="number" name="size" placeholder="Enter size">
    <br><br>
    <input type="submit" value="--- Send ---">
</form>
</body>
</html>

<?php

/*Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.*/

if (!empty($_POST['addr'])) {
    $address = $_POST['addr'];
} else $address = null;

if (!empty($_POST['size'])) {
    $size = $_POST['size'];
} else $size = null;



function delete_word($address, $size)
{
    if ($address && $size) {
        $file = fopen($address, 'r');
        $text = fread($file, filesize($address));
        fclose($file);
        $text = explode(" ", $text);

        echo count($text);
        foreach ($text as $index => $item) {
            if (strlen($item) > $size) {
                unset($index);
            }
        }
        echo count($text);

        //$file = fopen($_POST['addr'], 'w');
        echo "<pre>";
        print_r($text);
    } else echo "Enter file or size";
}

delete_word($address, $size);

















