<?php
require 'environment.php';

define("BASE_URL", "http://localhost/site-institucional");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'institucional';
	$config['host'] = 'localhost:3303';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
} else {
	$config['dbname'] = 'institucional';
	$config['host'] = 'localhost:3303';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '1qa2ws3ed2013';
}
?>