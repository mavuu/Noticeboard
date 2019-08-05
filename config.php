<?php
define('HOST','localhost');
	define('USER','elijah');
	define('PASSWORD','noticeboard');
	define('DB_NAME','noticeboard');

$connection=new mysqli(HOST, USER, PASSWORD, DB_NAME);
if ($connection->connect_error){
	 die('cannot connect to database '.$connection->connect_error);
	}
	