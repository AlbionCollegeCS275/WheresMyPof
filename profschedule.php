<!DOCTYPE html>
<html>
<body>


<?php
if(isset($_POST['submit'])) {
echo "<h2>Form Submitted Successfully! Below is the data</h2>";
      echo "<hr>";
      echo "Your Name: {$_POST['lname']}";
      echo "<br>Office Location: {$_POST['officebuilding']}";
      echo "<hr>";
   }
 ?>
 <!--Navigation-->
 <br>
 <a href ="/index.php">Back to Home</a>

</body>
</html>
