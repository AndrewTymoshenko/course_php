<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td {
			height: 50px;
			width: 50px;
		}
	</style>
</head>
<body>

</body>
</html>


<?php

	/*Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.

Пример результата:
2033	11696	712	32583	157
25694	19724	18487	8462	4412
4673	14450	16748	3505	5299
16873	21370	22482	28576	26060
28955	8804	26825	31471	22283
*/


	$cols = rand(2,10);
	$rows = rand(2,10);
	echo '<table>';
	for ($i = 1; $i <= $rows; $i++) {
		echo '<tr>';
		for ($j = 1; $j <= $cols; $j++) {
			$r = dechex(rand(0,255));
			$g = dechex(rand(0,255));
			$b = dechex(rand(0,255));
			$color = "#$r$g$b";
			$style = "style='background: $color'";
			echo "<td $style>$color</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
