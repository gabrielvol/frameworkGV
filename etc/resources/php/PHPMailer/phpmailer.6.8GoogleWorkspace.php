<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/SMTP.php';

/* // Inicia $mail ---------------------------------------------------------- */
$mail = new PHPMailer(true);
try {
    $mail->CharSet = PHPMailer::CHARSET_UTF8;

/* // $mail SMTPDebug ------------------------------------------------------- */
    $mail->SMTPDebug = 2;
    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

/* // $mail Host de conexion SMTP ------------------------------------------- */ 
    $mail->isSMTP();
    #$mail->Host = 'localhost';
    $mail->Host = 'smtp.gmail.com';
                    
/* // $mail Usuario y Password SMTP ----------------------------------------- */
    $mail->SMTPAuth = true;
    $mail->Username = 'form@sitiowebcom';
    $mail->Password = 'appPwd';
            
/* // $mail Seguridad TSL / SSL / Puertos ----------------------------------- */
    #$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    #$mail->SMTPSecure = 'ssl';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPSecure = 'tls';

    #$mail->Port = 25;
    #$mail->Port = 26;
    #$mail->Port = 465;
    $mail->Port = 587;
                    
/* // Descomentar si el servidor SMTP tiene un certificado autofirmado ------ */
    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
                    
/* // Descomentar si se requiere desactivar cifrado - (se suele usar en conjunto con la siguiente línea) - */
    #$mail->SMTPSecure = false;
                    
/* // Descomentar si se requiere desactivar completamente TLS (sin cifrado) - */
    #$mail->SMTPAutoTLS = false;
                    
/* // Direcciones remitente y destinatarios --------------------------------- */ 
    $mail->setFrom('form@sitiowebcom', 'Web Form');
            
    $mail->addAddress('tampas@gmail.com');
    $mail->addCC('gabrielvol@protonmail.com');
    #$mail->addBCC('ggvv@hotmail.com.ar');

    #$mail->addAddress($form_recipient__formMainID);
    #$mail->addCC($form_recipient_CC__formMainID);
    #$mail->addBCC($form_recipient_BCC__formMainID);
                    
/* // Cuerpo de mail y asunto ----------------------------------------------- */ 
    $mail->isHTML(true);
    $mail->Subject = 'Contacto PHPMailer 6.8 GWorkspace';
    
    $mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b>';
    $mail->AltBody = 'Este es el contenido del mensaje en texto plano';
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
}
