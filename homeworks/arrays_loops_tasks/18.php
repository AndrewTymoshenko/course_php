<?php

	$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
	$sat = 'Sat';
	$sun = 'Sun';

	foreach ($arr as $value) {
		if ($value == $sat || $value == $sun) {
			echo "<b>$value</b><br>";
		} else echo $value . "<br>";
	}