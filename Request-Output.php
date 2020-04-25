<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">



</head>

<body>
    <h1>You're here</h1>
    <?php
        $prof_name = $_POST['professor'];
        $name_space = strpos($prof_name, " ");
        $prof_last_name = substr($prof_name, $name_space);
        $prof_file_name = $prof_last_name.".xml";

        echo $prof_file_name;
    ?>
</body>

</html>