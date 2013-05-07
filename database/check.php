<?php

require_once 'constants.php';

class Mysql {
	private $con;
	private $result;
	
	function __construct() {
	 $con = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
	 if (!$con) {
	 die('Could not connect: ' . mysql_error());
	 }
	 mysql_select_db(DB_NAME, $con);
	
	}
	
	function validate_payment($payment, $id) {
			$total = 0;
		$this->result=mysql_query("SELECT * from tblassissment WHERE  fldStudentNum ='" . $id. "'  LIMIT 1;");
				
				if($rows = mysql_fetch_array($this->result)){
				
				while($rows = mysql_fetch_array($this->result))
		          {
		  
		    
		          $bal = $rows['fldBalance'];
		         $total = $total + $bal;
		         }
		         
				mysql_close($con);
				return $total;
				}
				else{
				return false;
			}
		}

		
}
