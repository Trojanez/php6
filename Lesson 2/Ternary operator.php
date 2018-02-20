<?php

	/* Придумать и написать любой пример использования тернарного оператора. */

	echo "Type 1 if you want to see the truth!\n";

	$handle = fopen ("php://stdin","r");
	$input = fgets($handle);

	echo ($input == 1) ? "true =)" : "not true =(";

?>