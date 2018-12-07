<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';




$name = $_POST['name'];
$email = $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];



$mail = new PHPMailer;


    $mail->isSMTP();                                      // Set mailer to use SMTP
     $mail->Host = ' smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eaisocietygeneral@gmail.com';                 // SMTP username
    $mail->Password = 'eaiSociety2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to

    //Recipients
    $mail->setFrom('info@eaisociety.com', 'Aashis Kumar');
    $mail->addAddress('aashiskumar986@gmail.com', 'Aashis Kumar');

    $mail->addReplyTo($email);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $name.'<br><br>'.$message;


    $mail->send();
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: http://eaisociety.com/");

}

?>
