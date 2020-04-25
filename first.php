<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
    <body>
    <p> Navigation:
<ul>
   <li> <a href="http://147.124.41.67/~afd11/index/">Website: afd11</a></li>

   <li> <a href="http://147.124.41.67/~afd11/">Directory: afd11</a></li>
    
    <li><a href="http://147.124.41.67/">WheresMyProf Main Page</a></li>
</ul>

</p>
    <h1>Select a Professor</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
  <select name="professor">
    <option value="">Select an Option</option>
    <option value="David Reimann">David Reimann</option>
    <option value="Mark Bollman">Mark Bollman</option>
    <option value="Ian MacKinnes">Ian MacKinnes</option>
    <option value="Wesley Dick">Wesley Dick</option>
  </select>
  <br><br>
  <input type="submit">
</form>

<h3>Your professor is:  <?php echo $_GET["professor"];?></h3>

<?php



//Initialize the XML Parser
$parser = xml_parser_create();

//Function to use at the start of an element
function start($parser, $element_name, $element_attrs){
    switch($element_name){
        case("PEOPLE"):
            echo "<h2> WheresMyProf Database</h2>";
        break;
        case("PROFESSOR"):
            echo "<h3>---Professor---</h3>";
        break;
        case("NAME"):
            echo "Name: ";
        break;
        case("EMAIL"):
            echo "Email: ";
        break;
        case("DEPARTMENT"):
            echo "Department: ";
        break;
        case("PICTURE"):
            echo "Picture: ";
        break;
        case("PHONE"):
            echo "Phone: ";
        break;
        case("CELL"):
            echo "Cell: ";
        break;
        case("SCHEDULE"):
            echo "Schedule: ";
        break;
        case ("OFFICE"):
            echo "";
        break;
        case("ROOM"):
            echo "Room: ";
        break;
        case("BUILDING"):
            echo "Building: ";

    }
    
    
}

//Function to use at end of element
function stop($parser, $element_name){
    switch($element_name){
        case("PROFESSOR"):
            echo "";
        break;
        case("NAME"):
            echo "<br>";
        break;
        case("EMAIL"):
            echo "<br>";
        break;
        case("DEPARTMENT"):
            echo "<br>";
        break;
        case("PICTURE"):
            echo "<br>";
        break;
        case("PHONE"):
            echo "<br>";
        break;
        case("CELL"):
            echo "<br>";
        break;
        case("SCHEDULE"):
            echo "<br>";
        break;
        case ("OFFICE"):
            echo "";
        break;
        case("ROOM"):
            echo "<br>";
        break;
        case("BUILDING"):
            echo "<br>";
    }
    
}

//Function to use when finding character data
function char($parser, $data){
    
        {echo chop($data, " ");}
        
   
    
    
}

//Specify element handler
xml_set_element_handler($parser,"start","stop");


//Specify data handler
xml_set_character_data_handler($parser,"char");



//Open XML file
$fp=fopen("prof1.xml", "r");

//Read data
while ($data=fread($fp, filesize("prof1.xml"))) {
    xml_parse($parser, $data, feof($fp)) or die (sprintf("XML Error: %s at line %d", 
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));

}

//Free the XML Parser
xml_parser_free($parser);




?>
</p>
</body>
</html>





  





    







<body>
</html>

