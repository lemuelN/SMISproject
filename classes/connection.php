<?php

class DB_Connect{
	protected $con;
	private $db_name = "ATISsmis";
	private $db_user = "root";
	private $db_password = "";
	private $db_host = "localhost";//"192.168.0.205";
	
	//connection to the database
	function openCon(){
		$con = mysql_connect($this->db_host,$this->db_user,$this->db_password);
		
		if(!$con){
			die('Could not connect to database'.mysql_error());
		}else{
			echo 'Successfully connected to database';
		}
		
		$db_selected = mysql_select_db($this->db_name,$con);
		if(!$db_selected){
			die ("Could not select database ".mysql_error());
		}
		
		return $con;
	}
	
	//close the connection
	function closeCon(){
		$con = mysql_close();
	}
}
