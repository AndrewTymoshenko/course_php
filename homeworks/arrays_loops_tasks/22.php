<?php

	/*Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/

	for ($i=0; $i <= 10; $i += 2) {
		for ($j=0; $j < $i; $j++) {
				echo "x";
			}
		echo "<br>";
	}