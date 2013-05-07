<?php
include 'connection.php';

class sqlfunction extends DB_Connect{

	function addUser($username,$fName,$pw,$type){
		$sql = "Insert into tbluseraccount (flduserID, 	fldfullName,fldpassword,flduserType) values('$username','$fName','$pw','$type')";
		if(!mysql_query($sql,$this->openCon())){
			die('Error: '.mysql_error());
		}
		
		$this->closeCon();
	}
	function searchStudent($studID){
		$sql = "Select fldStudent_No,fldStud_FirstName,fldStud_MiddleName,fldStud_LastName,fldGrade_Year_Lvl_Entered from tblstudentrecord 
		where fldStudent_No='".$studID."'";
		
		$result = mysql_query($sql,$this->openCon());
		$row = mysql_fetch_array($result);
		$json_data = array('studID'=>$row[0],'firstname'=>$row[1],'middlename'=>$row[2],'lastname'=>$row[3],'yearlevel'=>$row[4]);
		$json_string = json_encode($json_data);
		
		echo $json_string;
		
		$this->closeCon();
	}
	function viewFees_by_year_level($yr_level){
		$sql = "Select fldFee_id,fldFee_description,fldFee_amount from tblfor_fees where fldFee_yr_level ='".$yr_level."'";
		
		$result = mysql_query($sql,$this->openCon());
		while($row = mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td><span id=balance_".$row[0].">".$row[2]."<span></td>";
			echo "<td><input type='text' class='input_payment' id='input_".$row[0]."' onkeyup='computeBal(".$row[0].",".$row[2].")'/></td>";
			echo "<td><span id=edit_".$row[0].">edit</span></td>";
			echo "<td><span id=del_".$row[0].">delete</span></td>";
			echo "</tr>";
		}
	}
}