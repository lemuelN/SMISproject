<?php
	include 'classes/functions.php';
	
	$yr_level = $_POST['yr_level'];
	
	$viewFees = new sqlfunction();
	$viewFees->viewFees_by_year_level($yr_level);
