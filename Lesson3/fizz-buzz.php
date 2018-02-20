<?php 

	echo "Let's play fizz-buzz =)" . "\n";

	$file = fopen('test.txt', 'w+');

	$handler = fopen("php://stdin", "r");

	echo "Input the first number: ";
	$fizz = fgets($handler);
	fwrite($file, $fizz);

	echo "Input the second number: ";
	$buzz = fgets($handler);
	fwrite($file, $buzz);

	echo "Input the third number: ";
	$number = fgets($handler);
	fwrite($file, $number);

	$array = file('test.txt');

	foreach ($array as &$key) {
		$key = (int)$key;
	}

	echo fizzBuzz($array[0], $array[1], $array[2]);

	function fizzBuzz($a, $b, $c) {

		for($j = 1; $j <= $c; $j++) {
			if(($j % $a == 0) && ($j % $b == 0)) {
				echo "FB" . " ";
			} elseif($j % $a == 0) {
				echo "F" . " ";
			} elseif($j % $b == 0) {
				echo "B" . " ";
			} else echo $j . " ";
		}

		return true;
	}

	fclose($file);

?>