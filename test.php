<!DOCTYPE html>
<html>
<?php
session_start();
$filename = "\"".$_SESSION['filename']."\"";
echo $filename;
$_SESSION['xml']=simplexml_load_file($filename) or die ("Error cannot create object");


?>
</html>