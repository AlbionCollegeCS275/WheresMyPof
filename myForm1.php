 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Professor Information</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
 </head>

 <body>
   <?php

   $prof = "$_POST["name"].xml"
    $xml=simplexml_load_file("$prof") or die ("Error: Cannot create object");
      $var0= $xml-> info.
      $var1= $xml-> schedule.

   ?>

 </body>

 </html>
