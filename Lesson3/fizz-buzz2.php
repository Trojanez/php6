<?php
	$file = fopen('task.txt', 'r+');

	$fizz = (int)fread($file, 1);
	$buzz = (int)fread($file, 2);
	$number = (int)fread($file, 3);

	// Another variant using function file
	/*$arr = file('task.txt');

	foreach ($arr as &$key) {
		$key = (int)$key;
	}
	fizzBuzz($arr[0], $arr[1], $arr[2]);*/

	fizzBuzz($fizz, $buzz, $number);
	
	function fizzBuzz(&$a, &$b, &$c) {
		for($i = 1; $i <= $c; $i++) {
			if(($i % $a == 0) && ($i % $b == 0)) {
				echo "FB" . " ";
			} elseif($i % $a == 0) {
				echo "F" . " ";
			} elseif($i % $b == 0) {
				echo "B" . " ";
			} else echo $i . " "; 
		}

		return true;
	}

	fclose($file);


?>