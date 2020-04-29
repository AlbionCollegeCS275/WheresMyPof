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
  <div class="padding albion-purple">
    <h1>WheresMyProf</h1>
  </div>
  <div class="padding-header">
    <a class="albion-purple hover-albion-gold navbar" href="Student-Query.php">Search for a Professor</a>
    <a class="albion-purple hover-albion-gold navbar" href="Professor and Class Form.html">Professor Entry Form</a>
    <a class="albion-purple hover-albion-gold navbar" href="verification.php">Verify Email</a>
  </div>
  <div class="albion-text-purple row">
    <div class="column">
      <h2>How To:</h2>
      <p>If you're looking for a professor's office hours, click the <b>Search for a Professor</b> link.</p>
      <p>If you are a professor looking to add your schedule information, click the <b>Professor Entry Form</b> link.</p>
    </div>

    <div class="column">
      <h2>Welcome!</h2>
      <p style="text-align:left">This page was developed by Albion College students in a Software Development Class. </p>
    </div>

    <div class="column">
      <h2>Side Column</h2>
      <p>This is where the side column content will be.</p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div>
      <a href="https://www.facebook.com/"><i class="albion-text-purple xlarge fab fa-facebook-f hover-opacity"></i></a>
      <a href="https://instagram.com/"><i class="albion-text-purple xlarge fab fa-instagram hover-opacity"></i></a>
      <a href="https://snapchat.com/"><i class="albion-text-purple xlarge fab fa-snapchat hover-opacity"></i></a>
      <a href="https://pinterest.com/"><i class="albion-text-purple xlarge fab fa-pinterest-p hover-opacity"></i></a>
      <a href="https://twitter.com/"><i class="albion-text-purple xlarge fab fa-twitter hover-opacity"></i></a>
      <a href="https://www.linkedin.com/in/"><i class="albion-text-purple xlarge fab fa-linkedin hover-opacity"></i></a>
    </div>
    <p class="albion-text-purple" id="copyright"></p>
    <p><a class="hover-opacity" href="tos.html">Terms of Service</a> - <a class="hover-opacity" href="privacy.html">Privacy Policy</a></p>
  </footer>

  <script>

    // Writes the copyright statement with the current year. Website was first deployed in March 2020
    document.getElementById("copyright").innerHTML = "Copyright " + new Date().getFullYear() + " - All Rights Reserved";

  </script>

</body>

</html>
