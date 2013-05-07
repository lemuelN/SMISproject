<?php

require 'check.php';

class Membership {
	
	function validate_payment($un, $pwd) {
		$mysql = New Mysql();
		$ensure_credentials = $mysql->check_balance($un, $pwd);
		
		if($ensure_credentials) {
			$_SESSION['status'] = 'authorized';
			header("location: mijiel.php");
		} else return "Please enter a correct username and password";
		
	} 

}
