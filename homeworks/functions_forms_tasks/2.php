<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>

	<form action="2.php" method="get" accept-charset="utf-8">
		<textarea name="text"></textarea>
		<input type="submit">
	</form>

</body>
</html>

<?php

/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.*/

$arr = explode(" ", $_GET['text']);

$sortByLen = function ($a, $b)
{
    if (strlen($a) > strlen($b)) {
        return true;
    } else return false;
};



function biggestWords(array $a){
    global $sortByLen;
    uasort($a, $sortByLen);
    $arr = array_reverse($a);

    for ($i = 0; $i < 3; $i++) {
        echo $arr[$i] . "<br>";
    }
}

echo "<pre>";
biggestWords($arr);