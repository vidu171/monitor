<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'Exception.php';
include 'PHPMailer.php';
include 'SMTP.php';




//$replyTo = $_POST['email'];
session_start();
$email = 'viduuj@gmail.com';
$name = 'vidhyanshu';

$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->SMTPDebug = 2;
$mail->Username = 'convocationportalmuj@gmail.com';                 // SMTP username
$mail->Password = 'convocationportalmuj123';                           // SMTP password
// $mail->Username = 'acmmuj@gmail.com';                 // SMTP username
// $mail->Password = 'sadanahichairhai';
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                // TCP port to connect to

//Recipients
$mail->setFrom('monitor@gmail.com', 'Monitor System');
$mail->addAddress($email, $name);
//$mail->addAddress('howdybuddy0@gmail.com', 'Howdy Buddy');
//$mail->addAddress($specialist_email, 'Specialist');
// $mail->addReplyTo($replyTo);

//Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '[ALERT] Patient: 1 Has low Temprature'  ;
    $mail->Body    = 'Please login to the Monitor Portal to check on the patient stats';

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location: ./");
    }


// $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
// try {


// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'convocationportalmuj@gmail.com';                 // SMTP username
// $mail->Password = 'convocationportalmuj123';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

// //Recipients
// $mail->setFrom('convocationportalmuj@manipal.com', 'Aashis Kumar');
// // $mail->addAddress($row[1], $row[0]);     // Add a recipient
// // $mail->setFrom('acmmuj@gmail.com', 'ACM Webmaster');
// $mail->addAddress($email, $name);
// //$mail->addAddress('howdybuddy0@gmail.com', 'Howdy Buddy');
// //$mail->addAddress($specialist_email, 'Specialist');
// // $mail->addReplyTo($replyTo);
// //Content
// $mail->isHTML(true);                                  // Set email format to HTML
// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

// $mail->send();
// echo 'Message has been sent';
// } catch (Exception $e) {
// echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }

//?>
























