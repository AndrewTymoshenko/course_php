<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

	<form action="23.php" method="get" accept-charset="utf-8">
		<input type="number" name="number" placeholder="Введите число">
		<input type="submit" value="Ok">
	</form>

</body>
</html>


<?php

	/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
	По желанию можете сделать проверку на корректность введения данных пользователем.
	*/

	$number = $_GET['number'];
	$sum = 0;
	echo "<br>Вы ввели: {$number}<br>";
	$number = str_split($number); //преобразование числа в массив
	echo "<pre>";
	var_dump($number);

	foreach ($number as $value) {
		$sum += $value;
	}

	echo "Сумма = $sum";
