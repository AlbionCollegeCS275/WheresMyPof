<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">




</head>

<body>
    <h1>You're here</h1>
    
    <?php
        session_start();
        $prof_name = $_POST['professor'];
        $name_space = strpos($prof_name, " ");
        $prof_last_name = substr($prof_name, $name_space);
        $prof_file_name = strval($prof_last_name.".xml");

        echo $prof_file_name;

        $_SESSION['filename'] = $prof_file_name;

        include 'test.php';

        echo $_SESSION['xml'];
    ?>


    <!--Navigation-->
    <br>
    <a href ="/index.php">Back to Home</a>
</body>

</html>
