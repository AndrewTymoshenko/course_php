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

<form action="9.php" method="get">
    <textarea name="strToRev" cols="30" rows="5"></textarea>
    <br>
    <input type="submit">
</form>

</body>
</html>


<?php

/*
 * Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с
помощью формы.
 */

if (!empty($_GET['strToRev'])) {
    $strRev = $_GET['strToRev'];
} else $strRev = null;
function str_Rev($strRev)
{
    print_r(implode(array_reverse(str_split($strRev))));
}


str_Rev($strRev);