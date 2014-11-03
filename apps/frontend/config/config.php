<?php

return new \Phalcon\Config(array(
	'database' => array(
		'dbname'     => __DIR__ . '/../../db/db.sqlite',
		'adapter'		 => 'Sqlite',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../controllers/',
		'modelsDir' => __DIR__ . '/../models/',
		'viewsDir' => __DIR__ . '/../views/',
		'baseUri' => '/DeProfundis/'
	)
));
