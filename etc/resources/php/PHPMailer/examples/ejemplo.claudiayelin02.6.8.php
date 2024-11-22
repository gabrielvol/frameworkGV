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
    $mail->Host = 'claudiayelin.com';  // Host de conexión SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'form@claudiayelin.com';
    $mail->Password = 'contrasena';

/*___ Activar seguridad TLS _*/
    $mail->SMTPSecure = 'ssl';
/*___ Puerto SMTP _*/
    $mail->Port = 465;

/*___ Descomentar si el servidor SMTP tiene un certificado autofirmado _*/
    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
/*___ Descomentar si se requiere desactivar cifrado
    (se suele usar en conjunto con la siguiente línea) _*/
    #$mail->SMTPSecure = false;
/*___ Descomentar si se requiere desactivar completamente TLS (sin cifrado) _*/
    #$mail->SMTPAutoTLS = false;
 
    $mail->setFrom('form@claudiayelin.com');		// Mail del remitente
    $mail->addAddress('tampas@gmail.com');     // Mail del destinatario
 
    $mail->isHTML(true);
    $mail->Subject = 'Contacto desde formulario Claudia Yelin 02';  // Asunto del mensaje
    $mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b>';    // Contenido del mensaje (acepta HTML)
    $mail->AltBody = 'Este es el contenido del mensaje en texto plano';    // Contenido del mensaje alternativo (texto plano)
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
}
