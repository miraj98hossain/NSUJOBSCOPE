<?php
include '../constants/settings.php';



$rdir = str_replace("\\", "/", __DIR__);                    //Root Dir
require $rdir.'/PHPMailer/src/Exception.php';
require $rdir.'/PHPMailer/src/PHPMailer.php';
require $rdir.'/PHPMailer/src/SMTP.php';
require $rdir.'/PHPMailer/PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$myfname = ucwords($_POST['fullname']);
$myemail = $_POST['email'];
$mysubject = $_POST['subject'];
$mymessage = $_POST['message'];




$mail = new PHPMailer(true);


$mail->isSMTP();                
                      
$mail->Host     = "smtp.gmail.com";
$mail->SMTPAuth = true;                           
$mail->Username   = "nsu.jobscopes@gmail.com"; 
$mail->Password   = "xhkkiwmalaorrrhc";              
$mail->SMTPSecure = 'tls';                   
$mail->Port = 465;   
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 

$mail->setFrom($myemail,$myfname);
$mail->addAddress("nsu.jobscopes@gmail.com");           
  
$mail->isHTML(true);

$mail->Subject = $mysubject;
$mail->Body    = $mymessage;
$mail->AltBody = $mymessage;


if(!$mail->send()) {
header("location:../contact.php?r=2974");
} else {
header("location:../contact.php?r=5634");
}

?>