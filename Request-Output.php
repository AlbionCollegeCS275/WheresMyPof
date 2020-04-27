<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>

<body>

    <?php
        //Receive information from Student Query Page (POST Request)
        $prof_name = $_POST['professor'];
        $prof_file_name = $prof_name.".xml";

        //Read XML file
        $xml=simplexml_load_file($prof_file_name) or die("Error: Cannot create object");

        //Output Professor Name and Office Location
        echo "<h3>" . $xml->info->fname . " " . $xml->info->lname."<br></h3>";
        echo "<p> Office: "  . $xml->info->officebuilding . " " . $xml->info->room . "<br></p>";
        echo "<br><br>";

        //Output office hour times
        echo "Office Hours: <br>";
        foreach($xml->schedule->officehours->children() as $events) {
          echo $events->day . ": ";
          echo $events->start->hour . ":" . $events->start->minute;
          echo " - " . $events->stop->hour . ":" . $events->stop->minute;
          echo "<br>";
        }

      ?>


    <!--Navigation-->
    <br>
    <a href ="/index.php">Back to Home</a>
    
</body>

</html>
