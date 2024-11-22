<?php 
require $_SERVER['DOCUMENT_ROOT'] . 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('form@sitiowebcom', 'Web Form');
//Set an alternative reply-to address
$mail->addReplyTo('form@sitiowebcom', 'Web Form');
//Set who the message is to be sent to
$mail->addAddress('tampas@gmail.com', 'G V');
//Set the subject line
$mail->Subject = 'Contacto PHPMailer 5.2';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b>';    // Contenido del mensaje (acepta HTML)
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}