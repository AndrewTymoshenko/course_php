<?php

	$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
	$day = date('D');

	foreach ($arr as $value) {
		if ($value == $day) {
			echo "<i>$value</i><br>";
		} else echo $value . "<br>";
	}