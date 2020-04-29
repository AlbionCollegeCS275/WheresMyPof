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

  <div style="padding-top: 30px; padding-bottom: 30px; width: 200px; margin: auto;">
    <form name="myForm" onsubmit="verify();">
      <input name="code" type="text">
      <input type="submit">
    </form>
  </div>
  <div style="padding-top: 30px; padding-bottom: 30px;">
    <p id="verify"></p>
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
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'C:/Program Files/PHP/php-7.4.5/includes/PHPMailer/src/Exception.php';
    require 'C:/Program Files/PHP/php-7.4.5/includes/PHPMailer/src/PHPMailer.php';
    require 'C:/Program Files/PHP/php-7.4.5/includes/PHPMailer/src/SMTP.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings
      $mail->SMTPOptions = array(                                 // Required options to allow insecure SSL
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output, comment for production
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'joesmhoe135@gmail.com';                // SMTP username
      $mail->Password   = '********';                        // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

      //Recipients
      $mail->setFrom('joesmhoe135@gmail.com', 'WheresMyProf');
      $mail->addAddress('noahkeck@mindspring.com', 'Noah Keck');  // Name is optional

      // Content
      $mail->isHTML(true);                                        // Set email format to HTML
      $mail->Subject = 'WheresMyProf Account Verification';
      $mail->Body    = '<html><h1>WheresMyProf Verification Code</h1><p>Enter the verification code below to activate your account.</p><p>123456</p></html>';
      $mail->AltBody = 'Enter code: 123456';

      $mail->send();                                            // Uncomment for production
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  ?>

</body>

</html>
