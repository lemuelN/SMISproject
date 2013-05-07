<?php
	include 'classes/functions.php';
	
	$studID = $_POST['studID'];
	
	$search = new sqlfunction();
	$search->searchStudent($studID);
