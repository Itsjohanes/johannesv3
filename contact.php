<?php 
 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["name"])  && isset($_POST["email"]))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    require_once  "PHPMailer/PHPMailer.php";
    require_once  "PHPMailer/SMTP.php";
    require_once  "PHPMailer/Exception.php";
$mail =  new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "joeheroku@gmail.com";
$mail->Password = "gmailgoblok@.A";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
//email 
$mail->isHTML(true);
$mail->setfrom($email,$name);
$mail->addAddress("joeheroku@gmail.com");
$mail->Subject = $_POST['subject']. "dari". $_POST['email'];
 $mail->Body = $body;
if($mail->send())
{
    $status = "success";
    $response = "Email Send";
}else {
    
    $status = "false";
    $responses = "something error";
}
echo $status;
}
?>
