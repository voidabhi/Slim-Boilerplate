<?php

/*
* Todo Routes
*/

return array(
	'/all' => 'Todo:all',
	'/:id' => array(
		'post' => 'Todo:index',
		'get' => 'Todo:index')	
);
