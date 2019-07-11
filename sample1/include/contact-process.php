<?php
// Include the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$secretKey='6LcZ45EUAAAAAKkxWkmAxGneEIPIGvLmkwdapVgX';

$from = "customerquestions@pawsitivelyvet.com";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    // Get verify response data
    $captchaURL = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response'];
    $verifyResponse = file_get_contents($captchaURL);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
// Setup PHPMailer
        $mail = new PHPMailer();
        $mail->IsSMTP();

        // This is the SMTP mail server
        $mail->Host = 'smtp.startlogic.com';
        $mail->Port = 587;

        // Remove these next 3 lines if you dont need SMTP authentication
        $mail->SMTPAuth = true;
        $mail->Username = 'customerquestions@pawsitivelyvet.com';
        $mail->Password = 'Pawpets123';

        // Set who the email is coming from
        $mail->SetFrom('customerquestions@pawsitivelyvet.com', 'Website Admin');

        //Set who the email is sending to
        $mail->addAddress('dr.morgan@pawsitivelyvet.com', 'Doctor Morgan');     // Add a recipient
        $mail->addAddress('dr.dunaway@pawsitivelyvet.com', "Doctor Dunaway");               // Name is optional
        $mail->addAddress('rachelle@pawsitivelyvet.com', "Rachelle"); 
        // $mail->addAddress('smiley0418@gmail.com', "me"); 
        // set reply to 
        $mail->addReplyTo($email, $name);

        // Set the subject
        $mail->Subject = $subject;

        //Set the message
        $mail->MsgHTML($message);
        // $mail->AltBody(strip_tags($message));

        // Send the email
        if(!$mail->Send()) {
            die('Invalid entry!');
        } else {
        $text = "Thanks for the email!  We will check the message and be in contact at our earliest convenience!";
        echo '<xml>	<someText>'.$text.'</someText> </xml>';
        } 
    }else{
        $text = "Robot verification failed, please try again.";
        echo '<xml> <someText>'.$text.'</someText> </xml>';
    }
}else{
    $text = "Robot verification failed, please try again.";
    echo '<xml> <someText>'.$text.'</someText> </xml>';
}
?>
