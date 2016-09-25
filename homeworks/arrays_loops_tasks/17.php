<?php

	$arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	$month = date('M');

	foreach ($arr as $value) {
		if ($value == $month) {
			echo "<b>$month</b><br>";
		}else echo $value . "<br>";
	}