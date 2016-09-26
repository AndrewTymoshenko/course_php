<?php

	/*Вывести таблицу умножения*/

	echo "<table border = 10px;><tr>";

	for ($i=1; $i <= 10; $i++) {
		for ($j=1; $j <= 10; $j++) {
			echo "<td>" . ($i * $j) . "</td>";
		}
			if ($i != 10) {
				echo "</tr><tr>";
			}
	}

	echo "</tr></table>";