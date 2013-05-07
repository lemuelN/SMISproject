<!DOCTYPE HTML>
<html>
<head>
	<title>SMIS</title>
	<link rel="stylesheet" type="text/css" href="css/tcal.css" />
	<link rel="short icon" href='images1/csu.png'/>
	<script language="JavaScript" type="text/javascript" src="js/cussearch.js"></script>
	<script type="text/javascript" src="js/tcal.js"></script>
</head>
<body>
	<input name="bday" type="text" id="txt" class="tcal" value=""/>
	<form action='addUser.php' method='POST'>
		<label>Username</label></ br>
		<input type='text' name='username'/>
		<label>Full Name</label></ br>
		<input type='text' name='fullname'/>
		<label>Password</label></ br>
		<input type='text' name='password'/>
		<label>Type</label>
		<select name='type'>
			<option value='Teacher'>Teacher</option>
			<option value='Student'>Student</option>
			<option value='Parent'>Parent</option>
		</select>
		<input type='submit' value='Save'/>
	</form>
</body>
</html>
