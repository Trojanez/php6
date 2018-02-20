<?php

	$handler = fopen("php://stdin", "r");

	echo "Insert amount of entrances: ";
	$entry = (int)fgets($handler);

	echo "Insert amount of floors: ";
	$floors = (int)fgets($handler);

	echo "Insert amount of appartment on one floor: ";
	$aprtm = (int)fgets($handler);

	echo "Tell me the number of the room you would like to find: ";
	$number = (int)fgets($handler);

	if($number < 0) {
		die("Nobody can leave in appartment with the negative number");
	}

	// find total amount of rooms in the entry
	$totalAmountRooms = $floors * $aprtm;

	// find in which entry our desired number of room is located 
	$findEntry = (int)($number/$totalAmountRooms) + 1;

	if($findEntry > $entry) {
		die("Unfortunately, the room you entered can't be located in this house");
	}

	// find our room
	$res = $number - ((int)($number/$totalAmountRooms) * $totalAmountRooms);

	if($res % $aprtm == 0) {
		$result = $res / $aprtm;
	} else {
		$result = (int)($res / $aprtm) + 1;
	}

	echo "Apartment #" . $number . " is located on the entry #" . $findEntry . " and on the " . $result ."th floor";

