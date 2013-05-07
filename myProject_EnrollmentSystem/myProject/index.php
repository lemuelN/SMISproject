<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<!--<link rel="short icon" href='images1/csu.png'/>
	<link rel="stylesheet" type='text/css' href="css/index.css"/>
	<link rel="stylesheet" type='text/css' href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"/>
	<script type='text/javascript' src='js-ui/jquery-1.8.2.min.js'></script>
	<script type='text/javascript' src='js-ui/jquery-ui-darkhive.js'></script>
	<script type='text/javascript' src='js/assessmentScript.js'></script> -->
</head>
<body>
	<div id='wrapper'>
		<div id='div-content'>
			<label>ENTER STUDENT ID:</label>
			<input type='text' name='studID' id='studID'/><button id='btn_searchStudID'>Search</button>
			<p>
			<label>Student ID:</label><span id='studId'></span>
			<p>
			<label>First Name:</label><span id='firstname'></span>
			<p>
			<label>Middle Name:</label><span id='middlename'></span>
			<p>
			<label>Last Name:</label><span id='lastname'></span>
			<p>
			<label>Year Level:</label><span id='yr_level'></span>
			<p>
			
			<button id="btn_fee_sub">SUBJECTS/FEES</button>
			<p>
			<div id='div_tabs'>
				<ul>
					<li><a href='#div_for_fees'>Fees</a></li>
					<li><a href='#div_for_subjects'>Subjects</a></li>
				</ul>
				<div id='div_for_fees'>
					<fieldset id='fst_for_fees'><legend>Fees</legend>
						<table id='tbl_for_fees'>
							<thead>
								<tr>
									<th>Description</th>
									<th>Amount</th>
									<th>Balance</th>
									<th>Your payment</th>
									<th colspan=2>Action</th>
								</tr>
							</thead>
							<tbody id='tbl_body_for_fees'>
								
							</tbody>
						</table>
						<p>
						<label>Total Amount</label><input type='text' id='totalamount' class='input_payment' readonly>
						<p>
					</fieldset>
				</div><!--end div tag (id div_tabs)-->
				
				<div id='div_for_subjects'>
					<fieldset><legend>Subjects</legend>
						<table id='tbl_for_subjects'>
							<thead>
							
							</thead>
							<tbody id='tbl_body_for_subjects'>
							
							</tbody>
						</table>
					</fieldset>
				</div><!--end div tag (id div_for_subjects)-->
			</div>
			
			
		</div><!--end div tag (id div-content)-->
		
		
	
	</div>
</body>
</html>
