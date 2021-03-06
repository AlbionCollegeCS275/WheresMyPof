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
        $name_space = strpos($prof_name, " ");
        $prof_last_name = substr($prof_name, $name_space);
        $prof_file_name = strval($prof_last_name.".xml");

        //Read XML file
        $xml=simplexml_load_file($prof_file_name) or die("Professor has not provided information yet");

        //Output Professor Name and Office Location
        echo "<h3>" . $xml->info->fname . " " . $xml->info->lname."<br></h3>";
        $prof_dept;

        switch($xml->info->department){
          case("Anthro"):
            $prof_dept = "Anthropology";
            break;
          case("Soc"):
            $prof_dept = "Sociology";
            break;
          case("Art"):
            $prof_dept = "Art";
            break;
          case("ArtHis"):
            $prof_dept = "Art History";
            break;
          case("Bio"):
            $prof_dept = "Biology";
            break;
          case("Chem"):
            $prof_dept = "Chemistry";
            break;
          case("Comm"):
            $prof_dept = "Communication Studies";
            break;
          case("CS"):
            $prof_dept = "Computer Science";
            break;
          case("EM"):
            $prof_dept = "Economics and Management";
            break;
          case("Ed"):
            $prof_dept = "Education";
            break;
          case("Eng"):
            $prof_dept = "English";
            break;
          case("Ethnic"):
            $prof_dept = "Ethnic Studies";
            break;
            case("Geo"):
            $prof_dept = "Geology";
            break;
          case("His"):
            $prof_dept = "History";
            break;
          case("IntStud"):
            $prof_dept = "International Studies";
            break;
          case("Kin"):
            $prof_dept = "Kinesiology";
            break;
          case("Math"):
            $prof_dept = "Mathematics";
            break;
          case("MLAC"):
            $prof_dept = "Modern Languages and Cultures";
            break;
          case("Music"):
            $prof_dept = "Music";
            break;
          case("Phil"):
            $prof_dept = "Philosophy";
            break;
          case("Physics"):
            $prof_dept = "Physics";
            break;
          case("PoliSci"):
            $prof_dept = "Political Science";
            break;
          case("Psych"):
            $prof_dept = "Psychological Studies";
            break;
          case("Relig"):
            $prof_dept = "Religious Studies";
            break;
          case("Theatre"):
            $prof_dept = "Theatre";
            break;
          case("WomenGS"):
            $prof_dept = "Women's Gender and Sexuality Studies";
            break;
        }
        
        echo "<p>Department: ".$prof_dept."</p>";

        $prof_office;
        switch($xml->info->officebuilding) {
          case("Put"):
            $prof_office = "Putnam Hall";
            break;
          case("Chapel"):
            $prof_office = "Goodrich Chapel";
            break;
          case("Bobbitt"):
            $prof_office = "Bobbitt Visual Arts Center";
            break;
          case("Ferg"):
            $prof_office = "Ferguson Hall";
            break;
          case("Theatre"):
            $prof_office = "Herrick Theatre";
            break;
          case("Olin"):
            $prof_office = "Olin Hall";
            break;
          case("Pal"):
            $prof_office = "Palenske Hall";
            break;
          case("Rob"):
            $prof_office = "Robinson Hall";
            break;
          case("Vulg"):
            $prof_office = "Vulgamore Hall";
            break;
        }
        echo "<p> Office: "  . $prof_office . " " . $xml->info->room . "<br></p>";
        echo "<br><br>";


        //Output office hour times
        echo "Office Hours: <br>";
        foreach($xml->schedule->officehours->children() as $events) {
          $weekday = $events->day;

          switch($weekday){
            case "0":
              echo "Saturday ";
              break;
            case '1':
              echo "Sunday ";
              break;
            case '2':
                echo "Monday ";
                break;
            case '3':
                echo "Tuesday ";
                break;
            case '4':
              echo "Wednesday ";
              break;
            case '5':
              echo "Thursday ";
              break;
            case '6':
              echo "Friday ";
              break;
            default:
              echo "Weekday N/A ";

          }

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
