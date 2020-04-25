<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['submit'])) {
echo "<h2>Form Submitted Successfully!! Bellow is the data</h2>";
      echo "<hr>";
      echo "</br>Your Name :{$_POST['lname']}";
      echo "</br>Office Hours :{$_POST['officebuilding']}";
      echo "<hr>";
   }









 ?>
</body>
</html>
