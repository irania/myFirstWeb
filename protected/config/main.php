<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	'import'=>array(/////?????????????
		'application.models.*',
		'application.components.*',
	),
	'preload'=>array('index'),
	'modules'=>array(),
		'import'=>array(
		'application.models.*',
		'application.components.*',
	),
//	$connection=new CDbConnection($dsn,$username,$password);
	// establish connection. You may try...catch possible exceptions
//	$connection->active=true;

//	$connection->active=false;  // close connection
	// application components


	'components'=>array(
			'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=db_test2',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),		
		
		/*'errorHandler'=>array(

			'errorAction'=>'site/error',
		),*/
	),
);