<?php

spl_autoload_register(function($class) {

	$filename = $class . '.php';

	if(!file_exists($filename)) 
		throw new Exception('Autoload failed for: ' . $filename);

	include $filename;
});