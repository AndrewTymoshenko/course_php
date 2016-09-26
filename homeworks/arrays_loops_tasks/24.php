<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

	<form action="24.php" method="get" accept-charset="utf-8">
		<input type="number" name="number" placeholder="Введите число">
		<input type="number" name="number2" value="" placeholder="Выберите цифру для поиска">
		<input type="submit" value="Ok">
	</form>

</body>
</html>


<?php

	/*Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.*/

	$number = $_GET['number'];
	$ind = $_GET['number2'];
	$sum = 0;
	echo "<br>Вы ввели: {$number}<br> Поиск цифры {$ind}<br>";

	$number = str_split($number); //преобразование числа в массив

	foreach ($number as $value) {
		if ($value == $ind) {
			$sum++;
		}
	}

	echo "Сумма = $sum";


