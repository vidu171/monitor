<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$message = $_POST['message'];
$replyTo = $_POST['email'];
$template = file_get_contents("email_template/template.html");



$mail = new PHPMailer;

  
    $mail->isSMTP();                                      // Set mailer to use SMTP
     $mail->Host = ' smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eaisocietygeneral@gmail.com';                 // SMTP username
    $mail->Password = 'eaiSociety2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to

    //Recipients
    $mail->setFrom('info@eaisociety.com', 'EAIQuery');
    $mail->addAddress('aashiskumar986@gmail.com', 'Aashis Kumar'); 
    $mail->addAddress('monikalnct@gmail.com');     // Add a recipient
    $mail->addAddress('rahulsaxena0812@gmail.com');
  
    $mail->addReplyTo($replyTo);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New EAI Query';
    $mail->Body    = $message;


    $mail->send();
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: http://eaisociety.com/");
    
}

?>
