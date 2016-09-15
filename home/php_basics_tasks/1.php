<?php

	//#1-11

	$name = "Andrew";
	$age = 27;
	echo "Меня зовут: $name <br>";
	echo "Мне $age лет <br>";

	if ( $age >= 18 && $age <= 59) {
		echo "Вам еще работать и работать <br>";
	} elseif ( $age > 59) {
		echo "Вам пора на пенсию <br>";
	} elseif ( $age > 0 ) {
		echo "Вам еще рано работать <br>";
	} elseif ( $age < 0 || $age == NaN) {
		echo "Неизвестный возраст <br>";
	}

	//#9-12

	$day = "7sdf";

	switch ( $day ) {
		case ( $day >= 1 && $day <= 5):
			echo "Это рабочий день <br>";
			break;

		case ( $day === 6 || $day === 7):
			echo "Это выходной день <br>";
			break;

		default:
			echo "Неизвестный день <br>";
			break;
	}

	//#13

	$s = 500; //длина участка, который проехал автомобиль
	$t = 5; // время движения, в часах

	echo $s/$t . " км/ч или " . ($s*1000)/($t*60*60) ."  м/сек <br>";


	//#14

	$foo = "bar";
	$bar = 10;
	echo $$foo;


