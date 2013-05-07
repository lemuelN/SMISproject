<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

      $(".slideEnrollee").hide();
      $(".showEnrollee").show();

      $('.showEnrollee').click(function(){
      $(".slideEnrollee").slideToggle();
      });
      
      
       $(".slideOld").hide();
      $(".showOld").show();

      $('.showOld').click(function(){
      $(".slideOld").slideToggle();
      });
      
 
});
</script>
<style type="text/css">
#enroll{width:500px; height:500px;}

</style>
</head>

<fieldset><legend><h2>Select Enrollee : </h2></legend>
<form>



<a href="#" class="showEnrollee" >New_Enrollee</a><br /><br />
<a href="#" class="showOld" >Old_Student</a>
   <!--  ......Enroll.....   -->
   
   <div class="slideEnrollee">
   <iframe src="newEnrollee.php" id="enroll"></iframe>
   <button href="#" class="showEnrollee">Close</button>
   </div>
   
   <!--  ......Old.....   -->
   
   <div class="slideOld">
   <iframe src="#" id="old"></iframe>
   <button href="#" class="showOld">Close</button>
   </div>




</form>
</fieldset>




</body>
</html>
