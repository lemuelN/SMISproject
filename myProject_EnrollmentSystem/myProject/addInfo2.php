<html>
	<head>
		<title> Add New Record </title>
	</head>
	<body>
		<?php

			include ('myConnection.php');
			
			$con = new Connect(); //instantiating the class connect to access the methods inside it
			$con->openConn(); //calling the function or method to open the connection
				
			$fname = $_REQUEST['fullName'];
			$gender = $_REQUEST['gender'];
			$bdate = $_REQUEST['birthDate'];
			$age = $_REQUEST['age'];
			$address = $_REQUEST['address'];
			$grade = $_REQUEST['grade'];
		
			$query = "INSERT INTO jinky VALUES('".$fname."','".$age."','".$gender."','".$ctzenshp."','".$reli."')";
			$check = mysql_query($query);
		
			if (!$check) {
				die("ngek,waray sulod!".mysql_error());
			}
			
			echo "sumulod na..";
			$con->closeConn(); //closing the connection
		?>
	</body>
</html>
