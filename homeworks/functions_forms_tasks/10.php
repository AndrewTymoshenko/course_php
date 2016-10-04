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
<p>Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.</p>
<form action="10.php" method="get">
    <textarea name="text" cols="30" rows="5"></textarea>
    <br>
    <input type="submit">
</form>
</body>
</html>


<?php

/*Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.
*/

//$arr = explode(" ", trim($_GET['text']));

echo '<pre>';
//print_r($arr);



function uniqWords($string)
{
    $arr = explode(" ", trim($string));
    $count = count(array_unique($arr));
    return $count;
}

echo uniqWords($_GET['text']);


