<?php

	$handler = fopen("php://stdin", "r");

	echo "Insert the first number: ";
	$a = fgets($handler);
	echo "Insert the second number: ";
	$b = fgets($handler);


		for($i = 0; $i < $a; $i++) {
			for($j = 0; $j < $b; $j++) {
				if($j % 2 == 0) {
					echo "_" . " ";
				} else echo "#" . " ";
			}
			echo "\n";
		}