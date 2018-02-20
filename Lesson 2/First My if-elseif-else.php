<?php

	/* Придумать и написать любой пример использования if-elseif-else. */

	echo 'Please input your number here:';
	echo "\n";

	$handler = fopen('php://stdin', 'r');
	$get = fgets($handler);

	if($get < 0) {
		echo "Ice, brrrr";
	} elseif ($get > 0 && $get < 100) {
		echo 'Water, bul bul';
	} elseif ($get > 100) {
		echo 'vapor =)';
	} elseif($get == 0) {
		echo "freezing";
	} elseif($get == 100) {
		echo "boiling";
	} else echo "Please input correct number";

?>