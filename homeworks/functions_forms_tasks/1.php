<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="1.php" method="get" accept-charset="utf-8">
		<textarea name="first"></textarea>
		<textarea name="second"></textarea>
		<input type="submit">
	</form>
</body>
</html>

<?php

/*
 * Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию
 * getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 */

$a = $_GET['first'];
$b = $_GET['second'];



function getCommonWords($a, $b) {
	$first_arr = explode(" ", $a);
	$second_arr = explode(" ", $b);
	$main_arr = [];

	foreach ($first_arr as $item) {
		foreach ($second_arr as $value) {
			if ($item == $value) {
				array_push($main_arr, $item);
			}
		}
	}

	return $main_arr;
}

echo '<pre>';
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
$arr = getCommonWords($a, $b);
print_r($arr);