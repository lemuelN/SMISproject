<!DOCTYPE html>
<html>
<head>
	<title> My SAMPLE! </title>
	<link rel="stylesheet" type="text/css" href="index4.css">
	<script>
		function mine(a){
			document.getElementById(a).style.display="block";
		}
		function yours(b){
			document.getElementById(b).style.display="none";
		}	 
	 </script>
</head>

<body>
	<div>
	<fieldset id="new">
	<h1 id="new"> SCHOOL MANAGEMENT AND INFORMATION SYSTEM </h1>
	</fieldset>
	<hr>
	  <ul>
	      <li> Click "New Enrollee" if you are a new student and was about to enroll in this private institution. </li>
	      <li> Click "Old Student" if you are already studying in this private institution and was about to enroll for this current school year. </li>   
	  </ul>
	<hr>  
		<label onclick="mine('ako')" style="cursor:pointer"><u> New Enrollee </u></label> <br />
		<label onclick="mine('ikaw')" style="cursor:pointer"><u> Old Student </u></label>	
	</div>
	<div id="ako">
	<fieldset id="for">
		<h2><fieldset class="me"> Personal Information :</fieldset></h2>
		<label>First name :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="fname" id="inputs"> <br /> <br />
		<label>Middle name :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="mname" id="inputs"> <br /> <br />
		<label>Last name :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
			<input type="text" name="lname" id="inputs"> <br /> <br />
		<label>Gender :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
			<input type="text" name="gender" id="inputs"> <br /> <br />
		<label>Birth Date :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		   <input type="text" name="bdate" id="inputs"> <br /> <br />	
		<label>Age :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="age" id="inputs"> <br /> <br />
		<label>Address :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
			<input type="text" name="addrss" id="inputs"> <br /> <br />
		<p><fieldset class="me">Please select the grade/year level you wish to enroll :</p>	
		<label> Grade :</label>
			<select name="gd/yr">
				<option> Grade I </option>
				<option> Grade II </option>
				<option> Grade III </option>
				<option> Grade IV </option>
				<option> Grade V </option>
				<option> Grade VI </option>
				<option> Grade VII </option>
				<option> Grade VIII </option>
				<option> Grade IX </option>
				<option> Grade X </option>
				<option> Grade XI </option>
				<option> Grade XII </option>
			</select> <br />
			<label>Student Id :</label>
			   <input type="text" name="studId"> <br />
			<label>School Year :</label>
			   <input type="text" name="sy"> <br />
			<p1> [Please don't leave an empty field!] </p1>      
		</fieldset>
		<button> Continue </button>	
		<button> Submit </button>
		<button onclick="yours('ako')"> Close </button>	
		</fieldset>
	</div>
	
	<!-----End of New Enrollee!----->
	<!-----End of New Enrollee!----->
	
	<div>
		<fieldset id="ikaw"><legend><h2> Accounts Payable </h2></legend>
		<fieldset id="u">
			<label> Enter Student Name : </label>
			<input type="text" name="search" placeholder="">
		</fieldset>	
			<table>
				<tbody>
					<tr>
						<td> ENTRANCE </td>
						<td> BSP/GSP </td>
						<td> BOOKS </td>
						<td> TUITION FEE </td>
						<td> MEDICAL ASSISTANCE </td>
						<td> MISCELLANEOUS </td>
					</tr>
				</tbody>
			</table>
			<fieldset id="u">
				<label> Total Amount : </label>
				<input type="text" name="totAmount" placeholder=""> <br />
			<hr>
				Mode of Payment :<br />
				 <input type="radio"> Cash 
				 <input type="radio">	Partial
				 <input type="radio"> Check <br />
				Term of Payment : <br />
					<input type="radio"> First Sem/Second Sem Only
					<input type="radio"> Whole Sem
			<hr>
				<label> Amount Paid : </label>
					<input type="text" placeholder=""> <br />
				<label> Balance : </label>
					<input type="text" placeholder=""> <br />
				<label> Change : </label>
					<input type="text" placeholder=""> <br />
				<p2> [ Please don't leave an empty field! ] </p2>	
			</fieldset>
			<button> Submit </button>
			<button onclick="yours('ikaw')"> Close </button>	
		</fieldset>	
		
		<!----End of Old Student!---->
		<!----End of Old Student!---->
		
	</div>
</body>



</html>
