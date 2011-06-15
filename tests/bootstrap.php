<?php

define('SYSPATH','');

function autoload($class_name) {
	$file = str_replace('_', '/', $class_name).'.php';
	$local_file = 'classes/'.strtolower($file);
	if (file_exists($local_file))
		require_once $local_file;
	else
		require_once $file;
	
}

spl_autoload_register('autoload');
