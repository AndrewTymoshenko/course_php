<?php

	/*Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');

*/

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
