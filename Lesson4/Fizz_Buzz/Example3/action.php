<?php

	$file = fopen('text.txt', 'w+');

	$handler = fopen("php://stdin", "r");

		echo "Input the first number:\n ";
		$fizz = fgets($handler);
		fwrite($file, $fizz);

		echo "Input the second number:\n ";
		$buzz = fgets($handler);
		fwrite($file, $buzz);

		echo "Input the third number:\n ";
		$number = fgets($handler);
		fwrite($file, $number);

		$arr = file('text.txt');

		foreach ($arr as &$key) {
			$key = (int)$key;
		}

		$a = $arr[0];
		$b = $arr[1];
		$c = $arr[2];

		$fizzBuzz = function($array) use($a, $b) {

			return (($array % $a == 0) && ($array % $b == 0) ? "FB" : (($array % $a == 0) ? "F" : (($array % $b == 0) ? "B" : $array)));

		};

		$res = implode(' ', array_map($fizzBuzz, range(1, $c)));
		echo $res . "\n";

		$result = fopen('verify.txt', 'a+t');

		fwrite($result, $res);

		$arr1 = file('verify.txt');

		$string = explode(';', $arr1[0]);

		$a = $string[0] . "\n";
		$b = $string[1] . "\n";

		if($a == $b) {
			echo "true";
		} else echo "false";

	fclose($file);