<?php
/*
// REF [29] Form Status OK, tick
*/

/* // Import the PHPMailer class into the global namespace ------------------ */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* // Inicia proceso de form ------------------------------------------------ */
if (isset($_POST['button_form_submit__formMainID'])){
    
/* // Create variables for form data ---------------------------------------- */
        $data_nombre__formMainID          = $_POST['data_nombre__formMainID'];
        
        /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */


/* // INICIA VALIDACIÓN EN .form_validation_div ----------------------------- *
    if(!isset($data_nombre__formMainID) || trim($data_nombre__formMainID) == ''){
        $form_validation_div_msg__formMainID                  = $form_validation_msg_data_nombre__formMainID;
        $form_validation_div_class__formMainID                = " form_validation_div_invalid";
        $form_validation_input_class_data_nombre__formMainID  = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMainID         = "autofocus";

    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_div ----------------------------- */
        
        

/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */    
    if(!isset($data_nombre__formMainID) || trim($data_nombre__formMainID) == ''){
        $form_validation_span_msg_data_nombre__formMainID         = $form_validation_msg_data_nombre__formMainID;
        $form_validation_span_msg_data_nombre_en__formMainID      = $form_validation_msg_data_nombre_en__formMainID;
        $form_validation_span_class_data_nombre__formMainID       = " form_validation_span_active";
        $form_validation_input_class_data_nombre__formMainID      = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMainID             = "autofocus";
        
    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
        
    } else {
/* // FIN de validacion en .form_validation_span ---------------------------- */


        
/*___ Inicia $mail __________________________________________________________ */
        $mail = new PHPMailer(true);
        try {
            #$mail->SMTPDebug = 2; // Sacar esta línea para no mostrar salida debug
            #$mail->SMTPDebug = SMTP::DEBUG_CONNECTION; 
            $mail->isSMTP();
            $mail->Host = 'localhost';
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

/*___ Cabeceras del correo __________________________________________________ */
            $mail->setFrom('form@sitiowebcom');
            
            $mail->addAddress('tampas@gmail.com');
            $mail->addCC('gabrielvol@protonmail.com');
            #$mail->addBCC('bcc@example.com');
            
            $mail->isHTML(true);
            $mail->Subject = 'Contacto Web de ' . $data_nombre__formMainID;
            $mail->Body    = '<small style="color:#444">Este mensaje fue enviado desde el formulario que se encuentra en ' . $data_fullURL__formMainID . '</small><br><br>';
            $mail->Body   .= '<small style="color:#444"><strong>Filtro:</strong> FiltroFormWeb</small><br><br>';
            $mail->Body   .= '<strong>Nombre:</strong> ' . $data_nombre__formMainID  . '<br>';
    
            /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
            
            $mail->Body   .= '<br><br>______<br><small style="color:#666">Fin del mensaje</small>';
            
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
            $form_status_pop__formMainID = '<div class="pop_global pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMainID . '">' . $form_status_ok_globalA__formMainID . '</h2>'
/* // REF [29]  . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMainID . '"><span>' . $form_status_ok_globalA__formMainID . '</span></h2>' */
                . '<p>' . $form_status_ok_globalB__formMainID . '</p>'
                . '<p>' . $form_status_ok_globalC__formMainID . '</p>'
                . '<button type="button" class="<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__formMainID    = 'displayNone';

            $form_status_marquee__formMainID  = '';
/* // FIN mensaje ok en popup ----------------------------------------------- */   
            
            $mail->send();  
            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
            $_POST['data_nombre__formMainID']       = '';        
            /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
            
        } catch (Exception $e) {
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
            $form_status_pop__formMainID = '<div class="pop_global pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formError" class="' . $form_status_pop_h2_error_classes__formMainID . '">' . $form_status_error_globalA__formMainID . '</h2>'
                . '<p>' . $form_status_error_globalB__formMainID . '</p>'
                . '<p>' . $form_status_error_globalC__formMainID . '</p>'
                . '<p class="pop_formStatus_error_inner">' . $mail->ErrorInfo . '</p>'
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__formMainID    = 'displayNone';

            $form_status_marquee__formMainID  = '';
/* // FIN mensaje error en popup -------------------------------------------- */
            
            //echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
        }
    }
}
?>