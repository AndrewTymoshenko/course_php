<?php

	$arr = [ 4, 2, 5, 19, 13, 0, 10 ];
	$e = rand(2,4);

	if (in_array($e, $arr)) {
		echo "Есть";
	} else echo "Нет";

	echo "<br>e = $e";
