
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($to, $subject, $htmlContent, $textContent='') {
  global $config;

    //Load composer's autoloader
    require 'vendor/autoload.php';

    $email = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
      //Server settings
      $email->SMTPDebug = 0;                                 // Enable verbose debug output
      $email->isSMTP();                                      // Set mailer to use SMTP
      $email->Host = $config['MAIL_HOST'];  // Specify main and backup SMTP servers
      $email->SMTPAuth = true;                               // Enable SMTP authentication
      $email->Username = $config['MAIL_USER'];                 // SMTP username
      $email->Password = $config['MAIL_PASSWORD'];                           // SMTP password
      $email->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $email->Port = 587;                                    // TCP port to connect to

      // Add this and it will works ^^
      $email->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );

      //Recipients
      $email->setFrom('francois.laureen@gmail.com', 'Laureen');
      $email->addAddress('francois.laureen@gmail.com', 'Laureen');     // Add a recipient

      //Content
      $email->isHTML(true);                                  // Set email format to HTML
      $email->Subject = 'Here is the subject';
      $email->Body    = 'This is the HTML message body <b>in bold!</b>';
      $email->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $email->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $email->ErrorInfo;
    }
}
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

?>
