<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
<p>Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>

	<form action="2.php" method="post" accept-charset="utf-8">
		<textarea name="text"></textarea>
		<input type="submit">
	</form>

</body>
</html>

<?php

/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.*/


if (!empty($_POST['text'])) {
    $arr = explode(" ", $_POST['text']);
} else $arr = NULL;

$sortByLen = function ($a, $b)
{
    if (strlen($a) > strlen($b)) {
        return true;
    } else return false;
};



function biggestWords($a){
    if ($a != NULL){
        global $sortByLen;
        uasort($a, $sortByLen);
        $arr = array_reverse($a);

        for ($i = 0; $i < 3; $i++) {
            echo $arr[$i] . "<br>";
        }
    } else echo "Введите текст";
}

echo "<pre>";
biggestWords($arr);