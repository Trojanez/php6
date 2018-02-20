<?php

// Разыменование массива. С PHP 5.4 стало это возможным. Более быстрый и удобный способ доступа к элементу массива, который является результатом выполнения функции. 

	function test() {
		return array("one" => "PHP", "two" => "trunk", "three" => "is very cool");
	}

	echo test()['two'];

// Как делали раньше

	$temp = test();
	$secondElement = $temp[1];

// Или

	list(, $secondElement) = test();
