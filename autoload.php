<?php

spl_autoload_register(function ($className) {
	$availableClasses = array(
		'MimeMailParser' => __DIR__ . '/MimeMailParser.class.php',
		'MimeMailParser_attachment' => __DIR__ . '/attachments.class.php',
	);
	if(array_key_exists($className, $availableClasses)) {
		require($availableClasses[$className]);
	}
});
 
