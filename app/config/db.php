<?php
/* Initializing Eloquent  */

use Illuminate\Database\Capsule\Manager as Capsule;  

$dbConfig = array(
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'olivedb',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
);

$capsule = new Capsule; 
$capsule->addConnection($dbConfig);
$capsule->bootEloquent();
