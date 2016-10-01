<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="1.php" method="get" accept-charset="utf-8">
		<textarea name="first"></textarea>
		<textarea name="second"></textarea>
		<input type="submit">
	</form>
</body>
</html>

<?php


$a = $_GET['first'];
$b = $_GET['second'];

	function getCommonWords($a, $b) {
		$arr = [];
		foreach ($a as $item) {
			foreach ($b as $value) {
				if ($item == $value) {
					array_push($arr, $value);
				}
			}
		}
		print_r($arr);
	}

getCommonWords($a, $b);