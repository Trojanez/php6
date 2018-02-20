<?php

// First example

	$file = file('text.txt');
	print_r($file);

	$a = explode(" ", $file[0]);
	print_r($a);


	print_r(array_map(function($a) {

		if(($a % 2 == 0) && ($a % 5 == 0)) {
			return "FB";
		}
		if($a % 2 == 0) {
			return "F";
		}
		if($a % 5 == 0) {
			return "B";
		}

		return $a;

	}, $a));