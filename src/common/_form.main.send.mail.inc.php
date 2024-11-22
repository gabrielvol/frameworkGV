<?php
/*
// REF [29] Form Status OK, tick
*/

/* // Inicia proceso de form ------------------------------------------------ */
if (isset($_POST['button_form_submit__formMainID'])){
//    ini_set('sendmail_from', 'tampas@gmail.com');
//    ini_set('smtp_port',465);
//    ini_set('SMTP','mail.dominio.com');
    

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
        $form_validation_span_class_data_nombre__formMainID         = " form_validation_span_active";
        $form_validation_input_class_data_nombre__formMainID     = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMainID         = "autofocus";
    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_span ---------------------------- */
        
    } else {
/* // Si todos los campos validan ------------------------------------------- */
        
/* // Cuerpo de mail y asunto ----------------------------------------------- */
        $formMail_recipient  = $form_recipient__formMainID;
        // $formMail_recipient  = $data_area__formMainID;
        $formMail_asunto   = "Contacto Web mail() de " . $data_nombre__formMainID . ' - ' . $form_id_spelled;
        $formMail_headers  = "From: $data_nombre__formMainID <$data_email__formMainID>\r\n";
        // $formMail_headers .= "Reply-To: $data_email__formMainID \r\n";
        $formMail_headers .= "Content-type: text/html\r\n";
        $formMail_headers .= "X-Mailer: PHP5\n";
        $formMail_headers .= 'MIME-Version: 1.0' . "\n";
        // $formMail_headers .= "CC: " . $form_recipient_CC__formMainID . "\r\n";
        // $formMail_headers .= "BCC: " . $form_recipient_BCC__formMainID . "\r\n";
        $formMail_texto  = '<small style="color:#444">Este mensaje fue enviado desde el formulario que se encuentra en ' . $data_fullURL__formMainID . '</small><br /><br />';
        $formMail_texto .= '<small style="color:#444"><strong>Filtro:</strong> filtroWebForm</small><br /><br />';
        $formMail_texto .= '<strong>Nombre:</strong> ' . $data_nombre__formMainID . '<br />';

        /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */

        $formMail_texto .= '<br /><br /><strong>Errores:</strong><br />' . error_get_last()['message'];

        $formMail_texto .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';

/* // Inicia mail() --------------------------------------------------------- */
            if(mail($formMail_recipient, $formMail_asunto, $formMail_texto, $formMail_headers)){

                // echo '<META HTTP-EQUIV="Refresh" Content="0;URL=' . $url_gracias_full . '">';            
            
/* // INICIA MENSAJE OK EN $form_status_ ------------------------------------ *
                $form_validation_div_class__formMainID = 'displayNone';
            
                $form_status_marquee__formMainID = '<p class="form_status form_status_ok" role="alert" autofocus>' . $form_status_ok_globalA__formMainID . ' ' . $form_status_ok_globalB__formMainID . '</p>';
/* // FIN mensaje ok en $form_status_ --------------------------------------- */
            
                        
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
                $form_status_pop__formMainID = '<div class="pop_global pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                    . '<div role="document" tabindex="0">'
                    . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                    . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMainID . '">' . $form_status_ok_globalA__formMainID . '</h2>'
    /* // REF [29]  . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__formMainID . '"><span>' . $form_status_ok_globalA__formMainID . '</span></h2>' */
                    . '<p>' . $form_status_ok_globalB__formMainID . '</p>'
                    . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                    . '</div></div><div class="modal_global modal_formStatus"></div>';

                $form_validation_div_class__formMainID    = 'displayNone';

                $form_status_marquee__formMainID                  = '';
/* // FIN mensaje ok en popup ----------------------------------------------- */
            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
            $_POST['data_nombre__formMainID']         = ''; 
            /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */

/* // Si no se pudo hacer el envio de mail devolvemos un error -------------- */
        } else {
            
/* // INICIA MENSAJE ERROR EN $form_status_ --------------------------------- *
            $form_validation_div_class__formMainID = 'displayNone';
            
            $form_status_marquee__formMainID = '<p class="form_status form_status_error" role="alert" autofocus>' . $form_status_error_globalA__formMainID . ' <span class="displayBlock">' . $form_status_error_globalB__formMainID . '</span></p>';
/* // FIN mensaje error en $form_status_ ------------------------------------ */
            
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
            $form_status_pop__formMainID = '<div class="pop_global pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formError" class="' . $form_status_pop_h2_error_classes__formMainID . '">' . $form_status_error_globalA__formMainID . '</h2>'
                . '<p>' . $form_status_error_globalB__formMainID . '</p>'
                . '<p>' . $form_status_error_globalC__formMainID . '</p>'
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__formMainID    = 'displayNone';
            
            $form_status_marquee__formMainID                  = '';
/* // FIN mensaje error en popup -------------------------------------------- */

        }
    }
}
?>