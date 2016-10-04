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
<p>создать функцию, которая делает число симметричным, если оно не такое ))
не выходить из раом целого типа, желательно. Например 253 -- > 25352, 26 --> 262</p>
<br>
<form action="symetric.php" method="get">
    <input type="number" name="numb">
    <input type="submit" value="Send">
</form>
<br><br>

</body>
</html>


<?php

/*создать функцию, которая делает число симметричным, если оно не такое ))
не выходить из раом целого типа, желательно. Например 253 -- > 25352, 26 --> 262*/

if (!empty($_GET['numb'])) {
    $number = $_GET['numb'];
} else {
    $number = null;
    echo "Enter number!";
}

function symetric($number)
{
    $arr = [];
    if ($number != strrev($number)) {
        $number = str_split($number);
        for ($i = 0; $i < count($number); $i++) {
            $arr[] = $number[$i];
        }
        array_pop($arr);
        $number = array_merge($number, array_reverse($arr));
        $number = (int) implode($number);
    } else echo "Digit is palindrome";

    echo "<pre>";
    print_r($number);
}

symetric($number);




















