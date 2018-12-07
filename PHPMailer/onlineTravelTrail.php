<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';





$email = $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];
$name =  $_POST['name'];



$mail = new PHPMailer;


    $mail->isSMTP();                                      // Set mailer to use SMTP
     $mail->Host = ' smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eaisocietygeneral@gmail.com';                 // SMTP username
    $mail->Password = 'eaiSociety2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('info@onlinetraveltrail.com', 'Online Travel Trail');

    $mail->addReplyTo($email);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $name.'<br><a href="mailto:'.$email.'">'.$email.'</a><br>'.$message;


    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: http://onlinetraveltrail.com");

}

?>
