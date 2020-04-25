<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">



</head>

<body>
    <h1>You're here</h1>
    <?php
        $prof_name = $_POST['professor'];
        $prof_file_name = $prof_name.".xml";

        echo $prof_file_name;
    ?>
</body>

</html>