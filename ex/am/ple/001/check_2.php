<?php
session_start();
// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");

	include '../yacht/check_8.php';	
		
	include 'check_12.php';
	
	include '../yacht/check_10.php';
			
	include '../yacht/check_4.php';
		
	include '../yacht/check_5.php';
	
?>