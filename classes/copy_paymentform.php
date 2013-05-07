<!doctype html>
<html>
   <head>
     <meta charset="utf-8" />
       <title>jQuery UI Datepicker - Display month &amp; year menus</title>
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
          
              <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
              <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
     <link rel="stylesheet" href="/resources/demos/style.css" />
     <link type="text/css" rel="stylesheet" href="paymentform.css"/>
               <script>
            $(function() {
            $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
            });
            });
           </script>
           <script>
           $(function() {
           $( document ).tooltip();
           });
            </script>
       
         
   </head>
<body> 
    
    
  
 <div id="right">
      <form action="" method="post">
         <p style="text-align:right; color: black">Date:<input type="text" id="datepicker" /></p>
         <p style="text-align:right; color: black">No.:<input type="text" id="transID"/></p>
          
        </form>
  </div>
       
    <div id="container">
     <center>
        <h1><strong style="text-align:left ; color:black">PAYMENT FORM</strong></h1>
     </center>   
           <form action="" method="post">
      
            <input type="text" name="id" id="id" placeholder="Enter Student No."/>
             <input type="submit" id="submit" value="SEARCH" name="submit" />
        </form>
    
      <div class="rec"> 
        <?php
        
        
        
         
          if($_POST){
          $id = $_POST['id'];
          
          $con=mysql_connect('192.168.0.205','root','');
             if (!$con){
               die('Could not connect: ' . mysql_error());
                  }  
                mysql_select_db("atissmis", $con);
                
                 $result = mysql_query("SELECT * FROM tblstudentrecord WHERE fldStudent_No='" . $id . "';");
                 $result1= mysql_query("SELECT * FROM tblassissment WHERE fldStudentNum='" . $id . "';");
                   $res=mysql_fetch_array($result);
                    $res1=mysql_fetch_array($result1);
              if($res == "" && $res1=="") {
            ?>
            	<script>alert("NO FOUND DATA!");</script>
            <?php
            } else {
            	 echo' 
            	 <ul>  
						 <li>
							<label id="studNo">Student No.: </label>
							<input type="text" name="studNo" value="'. $res['fldStudent_No'] .'" />
						</li>
						  <li>
							  <label id="studName">Student Name: </label>
							  <input type="text" name="studName" id ="studName" value="' . $res['fldStud_FirstName'] .' ' . $res['fldStud_MiddleName'].' ' . $res['fldStud_LastName'].'"/>
						  </li>
							<li>
							  <label id="level">Year level: </label>
							  <input type="level" name="level" id="level" value="'. $res['fldGrade_Year_Lvl_Entered'] .'"/>
							  
							</li>
      
							
							<li>
								<label id="currentbalance">Current Balance: </label>
							  <input type="text" name="currentbalance" value="' . $res1['fldBalance'] . '"/>
							</li>
						  	</ul>	 
						  	<p>
							  <label>Type:</label>  
							  cash  <input type="radi0"/>
							  partial  <input type="radio" />
						  </p>
						  
							 <label for="cash"></label><input id="cash" title="AMOUNT" />
						
				
						';
     
            }
           mysql_close($con);
   
      }
    
    ?>
  
   </div> 
</div>
</body>
</html>
