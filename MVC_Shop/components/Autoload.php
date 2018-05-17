<?php 

	spl_autoload_register(function ($className) {

		$allPaths = array(
			'/models/',
			'/components/',
		);

		foreach ($allPaths as $path) {
			$path = ROOT . $path . $className . '.php';

			if(is_file($path)){
				include_once $path;
			}
		}
	});