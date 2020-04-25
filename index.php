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

</head>

<body>

<a href="Get-Request-QueryPage.php">Click here to find a prof</a>

  <!-- Footer -->
  <footer>
    <div>
      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
      <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
      <a href="https://snapchat.com/"><i class="fab fa-snapchat"></i></a>
      <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
      <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/"><i class="fab fa-linkedin"></i></a>
    </div>
    <p id="copyright"></p>
    <p><a href="tos.html">Terms of Service</a> - <a href="privacy.html">Privacy Policy</a></p>
  </footer>

  <script>

    // Writes the copyright statement with the current year. Website was first deployed in March 2020
    document.getElementById("copyright").innerHTML = "Copyright " + new Date().getFullYear() + " - All Rights Reserved";

  </script>

</body>

</html>
