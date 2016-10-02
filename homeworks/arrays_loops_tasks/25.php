<?php

	/*Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.*/

	$arr = [];
	$arr = array_pad($arr, 10, 0);

	for ($i=0; $i < count($arr); $i++) {
		$arr[$i] = rand(0, 100);
	}
	$min = $arr[0];
	$max = $arr[0];
	$i_max = 0;
	$i_min = 0;

	for ($i=0; $i < count($arr); $i++) {
		if ($max < $arr[$i]) {
			$max = $arr[$i];
			$i_max = $i;
		}
		if ($min > $arr[$i]) {
			$min = $arr[$i];
			$i_min = $i;
		}
	}

	echo "<pre>";
	print_r($arr);
	echo "<br>Максимум = {$max} Индекс = {$i_max}<br>Минимум = {$min} Индекс = {$i_min}<br>";

	//меняем местами переменные, не создавая новой
	$arr[$i_max] = $arr[$i_max] + $arr[$i_min];
	$arr[$i_min] = $arr[$i_max] - $arr[$i_min];
	$arr[$i_max] = $arr[$i_max] - $arr[$i_min];

	print_r($arr);