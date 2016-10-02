<?php

	/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/

	$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
	$day = date('D');

	foreach ($arr as $value) {
		if ($value == $day) {
			echo "<i>$value</i><br>";
		} else echo $value . "<br>";
	}