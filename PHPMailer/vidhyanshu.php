<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'Exception.php';
include 'PHPMailer.php';
include 'SMTP.php';




//$replyTo = $_POST['email'];
session_start();
$email = $_POST['email'];
$name = $_POST['name'];
$event_name = $_POST['event_name'];

$teammate_str = $_POST['teammate'];

// $teammate_list = explode('#', $teammate_str);

//$template = file_get_contents("email_template/template.html");
$teammate = $teammate_str;
$teammate = str_replace("#","<br>",$teammate);

$str1 = '<html xmlns="http://www.w3.org/1999/xhtml"><head>	<meta http-equiv="content-type" contsrent="text/html; charset=utf-8">  	<meta name="viewport" content="width=device-width, initial-scale=1.0;"> 	<meta name="format-detection" content="telephone=no"/>		<style>/* Reset styles */ body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }#outlook a { padding: 0; }.ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }/* Rounded corners for advanced mail clients only */ @media all and (min-width: 560px) {	.container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px;}}/* Set color for auto links (addresses, dates, etc.) */ a, a:hover {	color: #127DB3;}.footer a, .footer a:hover {	color: #999999;} 	</style>	<!-- MESSAGE SUBJECT -->	<title>Hi Vidhyanshu</title></head><!-- BODY --><!-- Set message background color (twice) and text color (twice) --><body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;	background-color: #F0F0F0;	color: #000000;"	bgcolor="#F0F0F0"	text="#000000"><!-- SECTION / BACKGROUND --><!-- Set message background color one again --><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background"><tr><td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"	bgcolor="#F0F0F0"><!-- WRAPPER --><!-- Set wrapper width (twice) --><table border="0" cellpadding="0" cellspacing="0" align="center"	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;	max-width: 560px;" class="wrapper">	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;			padding-top: 20px;			padding-bottom: 20px;">			<!-- PREHEADER -->			<!-- Set text color to background color -->			<div style="display: none; visibility: hidden; overflow: hidden; opacity: 0; font-size: 1px; line-height: 1px; height: 0; max-height: 0; max-width: 0;			color: #F0F0F0;" class="preheader"></div>			<!-- LOGO -->			<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2. URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content=logo&utm_campaign={{Campaign-Name}} -->			<a target="_blank" style="text-decoration: none;"				href="https://github.com/konsav/email-templates/"><img border="0" vspace="0" hspace="0"				src="http://www.elicit2018.tech/img/logo.png"				width="200" height="200"				alt="Logo" title="Logo" style="				color: #000000;				font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>		</td>	</tr><!-- End of WRAPPER --></table><!-- WRAPPER / CONTEINER --><!-- Set conteiner background color --><table border="0" cellpadding="0" cellspacing="0" align="center"	bgcolor="#FFFFFF"	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;	max-width: 560px;" class="container">	<!-- HEADER -->	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;			padding-top: 25px;			color: #000000;			font-family: sans-serif;" class="header">				Hi there 		</td>	</tr>		<!-- SUBHEADER -->	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-bottom: 3px; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 18px; font-weight: 300; line-height: 150%;			padding-top: 5px;			color: #000000;			font-family: sans-serif;" class="subheader">				You have successfuly registered  for: &nbsp;';
$str2 =     '</td>	</tr>	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;			padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"			href="elicit2018.tech"><img border="0" vspace="0" hspace="0"			src="http://www.elicit2018.tech/img/back.jpg"			alt="Please enable images to view this content" title="Hero Image"			width="560" style="			width: 100%;			max-width: 560px;			color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>	</tr>	<!-- PARAGRAPH -->	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;			padding-top: 25px; 			color: #000000;			font-family: sans-serif;" class="paragraph">			Please Note that the team leader\'s Email is your walkin Id<br>	<b>Teammates</b><br>';
$str3 =     '</td>	</tr>	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;			padding-top: 25px;			padding-bottom: 5px;" class="button"><a			href="';
$str4 =  '" target="_blank" style="text-decoration: underline;">				<table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;"></table></a>		</td>	</tr>	<!-- LINE -->	<!-- Set line color -->	<tr>			<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;			padding-top: 25px;" class="line"><hr			color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />		</td>	</tr>	<!-- LINE -->        <!-- Set line color -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;			padding-top: 25px;" class="line"><hr			color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />		</td>	</tr>	<!-- PARAGRAPH -->	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;			padding-top: 20px;			padding-bottom: 25px;			color: #000000;			font-family: sans-serif;" class="paragraph">				Have a&nbsp;question? <a href="mailto:acmmuj@gmail.com" target="_blank" style="color: #127DB3; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 160%;">acmmuj@gmail.com</a>		</td>	</tr><!-- End of WRAPPER --></table><!-- WRAPPER --><!-- Set wrapper width (twice) --><table border="0" cellpadding="0" cellspacing="0" align="center"	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;	max-width: 560px;" class="wrapper">	<!-- SOCIAL NETWORKS -->	<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->	<tr>		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;			padding-top: 25px;" class="social-icons"><table			width="256" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; border-spacing: 0; padding: 0;">			<tr>				<!-- ICON 1 -->				<td align="center" valign="middle" style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;"><a target="_blank"					href="https://raw.githubusercontent.com/konsav/email-templates/"				style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;					color: #000000;"					alt="F" title="Facebook"					width="44" height="44"					src="https://raw.githubusercontent.com/konsav/email-templates/master/images/social-icons/facebook.png"></a></td>				<!-- ICON 2 -->				<td align="center" valign="middle" style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;"> </td>								<!-- ICON 3 -->				<td align="center" valign="middle" style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;"></td>						<!-- ICON 4 -->				<td align="center" valign="middle" style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;"><a target="_blank"					href="https://raw.githubusercontent.com/tekonsav/email-templates/"				style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;					color: #000000;"					alt="I" title="Instagram"					width="44" height="44"					src="https://raw.githubusercontent.com/konsav/email-templates/master/images/social-icons/instagram.png"></a></td>			</tr>			</table>		</td>	</tr>	<!-- FOOTER -->	<!-- End of WRAPPER --></table><!-- End of SECTION / BACKGROUND --></td></tr></table></body></html>';



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
$mail->setFrom('acmmuj@gmail.com', 'ACM Webmaster');
$mail->addAddress($email, $name);
//$mail->addAddress('howdybuddy0@gmail.com', 'Howdy Buddy');
//$mail->addAddress($specialist_email, 'Specialist');
// $mail->addReplyTo($replyTo);

//Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '[Elicit 2018] Registration Confirmed for: '.$event_name;
    $mail->Body    = $str1." ".$event_name.$str2." ".$teammate." ".$str3." ".$str4;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location: http://elicit2018.tech/");
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
























