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
<p>создать функцию которая отдает рандомный массив рандомных целых чисел</p>
<br><br>

<form action="random.php" method="get">
    Введите максимальный размер массива: <input type="number" name="arr_length">
    <br><br>
    Введите максимальное число: <input type="number" name="digit">
    <br>
    <input type="submit" value="Send">
</form>

</body>
</html>

<?php

if (!empty($_GET['arr_length']) && !empty($_GET['digit']) && $_GET['arr_length'] > 0 && $_GET['digit']) {
    $arr_length = $_GET['arr_length'];
    $digit = $_GET['digit'];
} else $arr_length = $digit = null;

function random($arr_length, $digit)
{
    $arr = [];
    for ($i = 1; $i < rand(1, $arr_length); $i++) {
        $arr[] = rand(1, $digit);
    }
    echo "<pre>";
    print_r($arr);
}

random($arr_length, $digit);






















