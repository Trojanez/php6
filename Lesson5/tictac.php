<?php

	$handler = fopen("php://stdin", "r");

	$arr = array("  ", "  ", "  ", "  ", "  ", "  ", "  ", "  ", "  ");

	echo "HELPER:\n";


	for($i = 0; $i < count($arr); $i++) {
		echo $i;
		if($i == 2 || $i == 5 || $i == 8) {
			echo "\n";
		}
	}


	for($i = 0; $i < count($arr); $i++) {
		echo $arr[$i] . " ";
		if($i == 2 || $i == 5 || $i == 8) {
			echo "\n";
		}
	}

	$winner = 'n';

	while(!(array_search(" ", $arr))) {

		echo "Insert coordiante between 0 and 8:\n";
		$i = (int)fgets($handler);

		echo "Insert x or o:\n";
		$user = fgets($handler);

		$arr[$i] = $user;

		for($i = 0; $i < count($arr); $i++) {
			echo $arr[$i] . " ";
				if($i == 2 || $i == 5 || $i == 8) {
			echo "\n";
		}
		}
	}

	if(($arr[0] == 'x' && $arr[1] == 'x' && $arr[2] == 'x') || ($arr[3] == 'x' && $arr[4] == 'x' && $arr[5] == 'x') || ($arr[6] == 'x' && $arr[6] == 'x' && $arr[8] == 'x') || ($arr[0] == 'x' && $arr[3] == 'x' && $arr[6] == 'x') || ($arr[1] == 'x' && $arr[4] == 'x' && $arr[7] == 'x') || ($arr[2] == 'x' && $arr[5] == 'x' && $arr[8] == 'x') || ($arr[0] == 'x' && $arr[4] == 'x' && $arr[8] == 'x') || ($arr[2] == 'x' && $arr[4] == 'x' && $arr[6] == 'x')) {
			$winner = 'x';
			die("X wins");
		}
