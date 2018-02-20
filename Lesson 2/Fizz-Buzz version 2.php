<?php

	/* Решить задачу fizz-buzz :)*/

	// First row, say Hello
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

		// Solution of this task using ternary operator
		echo (($i % $fizz == 0) && ($i % $buzz == 0) ? "FB\n" : (($i % $fizz == 0) ? "F\n" : (($i % $buzz == 0) ? "B\n" : $i . "\n")));
	}

?>