<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

      $(".slideGrade").hide();
      $(".showShowGrade").show();

      $('.showGrade').click(function(){
      $(".slideGrade").slideToggle();
      });
      
      
      
       $(".slideYear").hide();
      $(".showYear").show();

      $('.showYear').click(function(){
      $(".slideYear").slideToggle();
      });
      
      
      
      
 
});
</script>
<style type="text/css" >
#selectDao{font-style:none;background-color:pink;width:230px;}
#el{color:red;}
#hi{color:blue;}

</style>


</head>
<body>
<fieldset><legend><h2>Enrollment Form</h2></legend>

    <form name="form1" method="post" action="">
    <label>FirstName : <input type="text" name="fname" /></label><br/>
    <label>MiddleName : <input type="text" name="mname" /></label><br/>
    <label>LastName : <input type="text" name="lname" /></label><br/>
    <label>Gender : </label><select name="gender" id="gender">
        <option>Male</option>
        <option>Female</option></select><br/>
    <label>Age : <input type="text" name="fname" /></label><br/>
    <label>Address : <input type="text" name="fname" /></label><br/>
    <br />
    <label><h3>Enroll in Elementary or High School </h3></label><br/>
    <div id="selectDao">
    <a href="#" class="showGrade" id="el"><b>Elementary | </b></a>
    <a href="#" class="showYear" id="hi"><b>HighSchool</b></a>
    </div>
    <div class="slideGrade">
    <label>Grade : </label><select name="grade" id="grade">
        <option></option>
        <option>Grade_1</option>
         <option>Grade_2</option>
         <option>Grade_3</option>
         <option>Grade_4</option>
         <option>Grade_5</option>
         <option>Grade_6</option>
         <option>Grade_7</option></select>
     </div>
     
    <div class="slideYear">     
    <label>Year_Level : </label><select name="year" id="year">
        <option></option>
        <option>First_Year</option>
         <option>Second_Year</option>
         <option>Third_Year</option>
         <option>Fourth_Year</option></select>     
     </div>
     
     <br /><br />
         <input type="button" name="go" value="Go" />
    </form>
</fieldset>





</body>
</html>
