<?php

	/* Решить задачу fizz-buzz :)*/

	echo "\nLets Fizz-Buzz together! =)\n\n";

	$handle = fopen ("php://stdin","r");

	echo "Input the first number:\n";
	$fizz = (int)fgets($handle);
	echo "Input the second number:\n";
	$buzz = (int)fgets($handle);
	echo "Input the third number:\n";
	$number = (int)fgets($handle);

	echo "\n";

	for($i = 1; $i <= $number; $i++) {

		// Solution of this task using if-elseif-else

		if(($i % $fizz == 0) && ($i % $buzz == 0)) {
			echo "FB" . " ";
		} elseif($i % $fizz == 0) {
			echo "F" . " ";
		} elseif($i % $buzz == 0) {
			echo "B" . " ";
		} else echo $i . " ";
	}

?>