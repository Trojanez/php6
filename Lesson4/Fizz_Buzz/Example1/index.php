<?php

	// First example

	$file = file('text.txt');

	$string = explode(" ", $file[0]);

	$a = $string[0];
	$b = $string[1];

	function fizzBuzz($arr) {

		global $a, $b;

		if(($arr % $a == 0) && ($arr % $b == 0)) {
			return "FB";
		} elseif ($arr % $a == 0) {
			return "F";
		} elseif ($arr % $b == 0) {
			return "B";
		}

		return $arr;

	}

	echo implode("\n", array_map('fizzBuzz', range(1,18)));

	