<?php

declare(strict_types=1);

// Autoloader for required classes
spl_autoload_register(function (string $classname) {
	if (class_exists($classname)) {
		return;
	}

	switch (true) {
		case str_contains($classname, 'Controller'):
			$dir = 'controllers/';
			break;
		case str_contains($classname, 'Model'):
			$dir = 'models/';
			break;
		case str_contains($classname, 'View'):
			$dir = 'views/';
			break;
		default:
			$dir = 'core/';
	}

	$file = file_exists($filename = $dir . $classname . '.php')
		? $filename
		: 'components/' . $classname . '/' . $classname . '.php';

	if (!file_exists($file)) {
		throw new Exception(
			'Unable to require ' . $classname . ' from ' . $file,
			500
		);
	}

	require_once $file;

	if (!class_exists($classname)) {
		throw new Exception(
			'Class ' .
				$classname .
				' not declared in ' .
				$file .
				': Possibly missspelled class name',
			$dir ? 404 : 500
		);
	}
});
