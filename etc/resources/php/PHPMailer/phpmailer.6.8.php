<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION; 
    $mail->isSMTP();
    #$mail->Host = 'localhost';
    $mail->Host = 'smtp.sitiowebcom';
    $mail->SMTPAuth = true;
    $mail->Username = 'form@sitiowebcom';
    $mail->Password = 'contrasena';

/*___ Activar seguridad TLS _*/
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPSecure = 'ssl';

    #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    #$mail->SMTPSecure = 'tls';
            
/*___ Puerto SMTP _*/
    #$mail->Port = 25;
    #$mail->Port = 26;
    $mail->Port = 465;
            
    $mail->CharSet = PHPMailer::CHARSET_UTF8;

/*___ Descomentar si el servidor SMTP tiene un certificado autofirmado _*/
    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
/*___ Descomentar si se requiere desactivar cifrado
    (se suele usar en conjunto con la siguiente línea) _*/
    #$mail->SMTPSecure = false;
/*___ Descomentar si se requiere desactivar completamente TLS (sin cifrado) _*/
    #$mail->SMTPAutoTLS = false;
 
    $mail->setFrom('form@sitiowebcom');
            
    $mail->addAddress('tampas@gmail.com');
    $mail->addCC('gabrielvol@protonmail.com');
    #$mail->addBCC('bcc@example.com');
 
    $mail->isHTML(true);
    $mail->Subject = 'Contacto PHPMailer 6.8';
    
    $mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b>';
    $mail->AltBody = 'Este es el contenido del mensaje en texto plano';
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
}
