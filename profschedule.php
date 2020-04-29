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
      $lname = $_POST['lname'];
      $file_name = $lname . ".xml";


      $file = fopen($file_name, "w") or die("Unable to open file!");
      $txt = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
      fwrite($file, $txt);
      $txt = "<root>";
      fwrite($file, $txt);

      fclose($file);

   }


 ?>
 <!--Navigation-->
 <br>
 <a href ="/index.php">Back to Home</a>

</body>
</html>
