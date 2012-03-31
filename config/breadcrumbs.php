<?php defined('SYSPATH') OR die('No direct script access!'); 

return array(
	'default' => array(
		'view' => 'line', //TODO: create a list view
		'urls' => Kohana::$config->load('ayar.kirinti.linkler'), // change to false if you don't want urls on the breadcrumb items
		'active_class' => 'active'
	)
);