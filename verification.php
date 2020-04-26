<!DOCTYPE html>
<html lang="en">

<head>
  <title>Where's My Prof?</title>
    <meta charset="UTF-8">
    <meta name="author" content="Noah Keck">
    <meta name="description" content="WheresMyProf uses crowdsourced information to provide both professors and students an easy way to share schedule information.">
    <meta name="revised" content="4/20/2020">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fontawesome-free-5.12.1/css/all.css">
    <link rel="stylesheet" href="mystyle.css">

</head>

<body>
  <div class="header">
    <h1>Enter your verification code below</h1>
  </div>

  <div style="padding-top: 30px; padding-bottom: 30px; width: 100px; margin: auto;">
    <form id="verify">
      <input type="text">
    </form>
  </div>




  <!-- Footer -->
  <footer>
    <div>
      <p id="copyright"></p>
      <p><a href="tos.html">Terms of Service</a> - <a href="privacy.html">Privacy Policy</a></p>
    </div>
  </footer>

  <script>

    // Writes the copyright statement with the current year. Website was first deployed in March 2020
    document.getElementById("copyright").innerHTML = "Copyright " + new Date().getFullYear() + " - All Rights Reserved";

  </script>

  <?php
    
   ?>

</body>

</html>
