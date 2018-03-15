<!-- Etablerar uppkoppling med databasen och lagrar sessioner och tokens som används vid CSRF-blockering -->

<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'otp'
	),
	'session' => array(
		'session_name' => 'user',
		'token_name'	=> 'token'
	)
);


require './vendor/autoload.php';

require_once 'functions/sanitize.php';