<?php

// REF [29] Form Status OK, tick

/* // Import the PHPMailer class into the global namespace ------------------ */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* // Inicia proceso de form ------------------------------------------------ */
if (isset($_POST['button_form_submit__formMain'])){

/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
    if (empty($_POST["data_nombre__formMain"])) {
        $form_validation_span_msg_data_nombre__formMain         = $form_validation_msg_data_nombre__formMain;
        $form_validation_span_msg_data_nombre_en__formMain      = $form_validation_msg_data_nombre_en__formMain;
        $form_validation_span_class_data_nombre__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_nombre__formMain      = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMain             = "autofocus";

    } elseif (empty($_POST["data_email__formMain"])) {
        $form_validation_span_msg_data_email__formMain          = $form_validation_msg_data_email__formMain;
        $form_validation_span_msg_data_email_en__formMain       = $form_validation_msg_data_email_en__formMain;
        $form_validation_span_class_data_email__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_email__formMain       = " form_validation_input_invalid";
        $form_input_autofocus_data_email__formMain              = "autofocus";

    } elseif (empty($_POST["data_telefono__formMain"])) {
        $form_validation_span_msg_data_telefono__formMain       = $form_validation_msg_data_telefono__formMain;
        $form_validation_span_msg_data_telefono_en__formMain    = $form_validation_msg_data_telefono_en__formMain;
        $form_validation_span_class_data_telefono__formMain     = " form_validation_span_active";
        $form_validation_input_class_data_telefono__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_telefono__formMain           = "autofocus";
        
    } else {
/* // FIN de validacion en .form_validation_span ---------------------------- */

    /*___ Asignamos datos de campos a variables ____________________________*/
        $data_nombre__formMain          = $_POST['data_nombre__formMain'];
        $data_email__formMain           = $_POST['data_email__formMain'];
        $data_telefono__formMain        = $_POST['data_telefono__formMain'];
        $data_mensaje__formMain         = $_POST['data_mensaje__formMain'];
    
/*___ Inicia $mail __________________________________________________________ */
        $mail = new PHPMailer(true);
        try {
            #$mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
            #$mail->SMTPDebug = SMTP::DEBUG_CONNECTION; 
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = true;
            $mail->Username = 'form@sitiowebcom';
            $mail->Password = 'contrasena';

        /*___ Activar seguridad TLS _*/
            #$mail->SMTPSecure = 'tls';
            #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            
        /*___ Puerto SMTP _*/
            $mail->Port = 25;
            #$mail->Port = 26;
            #$mail->Port = 465;
            
            $mail->CharSet = PHPMailer::CHARSET_UTF8;

        /*___ Descomentar si el servidor SMTP tiene un certificado autofirmado _*/
            #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
        /*___ Descomentar si se requiere desactivar cifrado
            (se suele usar en conjunto con la siguiente línea) _*/
            #$mail->SMTPSecure = false;
        /*___ Descomentar si se requiere desactivar completamente TLS (sin cifrado) _*/
            #$mail->SMTPAutoTLS = false;

/*___ Cabeceras del correo __________________________________________________ */
            $mail->setFrom('form@domaincom');
            $mail->addAddress('gabrielvol@protonmail.com'); // $mail->addAddress('tampas@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contacto Web de ' . $data_nombre__formMain;
            $mail->Body    = '<small style="color:#444">Este mensaje fue enviado desde el formulario que se encuentra en ' . $data_fullURL__formMain . '</small><br><br>';
            $mail->Body   .= '<small style="color:#444"><strong>Filtro:</strong> FiltroFormWeb</small><br><br>';
            $mail->Body   .= '<strong>Nombre y Apellido:</strong> ' . $data_nombre__formMain  . '<br>';
            $mail->Body   .= '<strong>Correo Electronico:</strong> ' . $data_email__formMain  . '<br>';
            $mail->Body   .= '<strong>Telefono:</strong> ' . $data_telefono__formMain  . '<br>';
            $mail->Body   .= '<strong>Mensaje:</strong> <br>' . $data_mensaje__formMain;
            $mail->Body   .= '<br><br>______<br><small style="color:#666">Fin del mensaje</small>';
            
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
            $form_status_pop__formMain = '<div class="pop_global pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                . '<div role="document" tabindex="0">'
                . '<button type="submit" class="button_close button_close_pop hover_grow_S_ani" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMain . '">' . $form_status_ok_globalA__formMain . '</h2>'
/* // REF [29]  . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMain . '"><span>' . $form_status_ok_globalA__formMain . '</span></h2>' */
                . '<p>' . $form_status_ok_globalB__formMain . '</p>'
                . '<p>' . $form_status_ok_globalC__formMain . '</p>'
                . '<button type="submit" class="button_pop_submit callToAction" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            $form_validation_div_class__formMain    = 'displayNone';
            $form_status__formMain                  = '';
/* // FIN mensaje ok en popup ----------------------------------------------- */   
            
            $mail->send();  
            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
            $_POST['data_nombre__formMain']       = '';
            $_POST['data_email__formMain']          = '';
            $_POST['data_telefono__formMain']       = '';
            $_POST['data_mensaje__formMain']        = '';   
            
        } catch (Exception $e) {
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
            $form_status_pop__formMain = '<div class="pop_global pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="submit" class="button_close button_close_pop hover_grow_S_ani" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formError" class="' . $form_status_pop_h2_error_classes__formMain . '">' . $form_status_error_globalA__formMain . '</h2>'
                . '<p>' . $form_status_error_globalB__formMain . '</p>'
                . '<p>' . $form_status_error_globalC__formMain . '</p>'
                . '<button type="submit" class="button_pop_submit callToAction" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            $form_validation_div_class__formMain    = 'displayNone';
            $form_status__formMain                  = '';
/* // FIN mensaje error en popup -------------------------------------------- */
            
            //echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
        }
    }
}
?>