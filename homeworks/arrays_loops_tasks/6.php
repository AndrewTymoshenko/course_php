<?php

	$arr = [
		'red' => 'красный',
		'green' => 'зеленый',
		'blue' => 'синий'
	];
	$en = [];
	$ru = [];

	foreach ($arr as $key => $value) {
		array_push($en, $key);
		array_push($ru, $value);
	}

	echo "<pre>";
	print_r($en);
	print_r($ru);
