﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее
таким образом, что каждое новое предложение начиняется с большой буквы.
Пример:

Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь,
все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там. А вы друзья
как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.
А там хоть трава не расти.'</p>
<form action="11.php" method="get">
    <textarea name="text" cols="40" rows="10"></textarea>
    <br>
    <input type="submit" value="OK">
</form>
</body>
</html>

<?php

/* Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее
таким образом, что каждое новое предложение начиняется с большой буквы.
Пример:

Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь,
все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там. А вы друзья
как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.
А там хоть трава не расти.';*/

if (!empty($_GET['text'])) {
    $text = $_GET['text'];
} else $text = null;


function toUpper($text)
{
    $text = str_split($text);
    $text[0] = strtoupper($text[0]);
    for ($i = 0; $i < count($text); $i++) {
        if (preg_match('/[\!\?\.\...]/', $text[$i])) {
            $text[$i+2] = strtoupper($text[$i+2]);
        }
    }
    echo implode($text);
}

toUpper($text);

//todo: reading russian