<?php
/*
// REF [29] Form Status OK, tick
// REF [50] Google reCaptcha
*/

/* // Import the PHPMailer class into the global namespace ------------------ */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/SMTP.php';

/* // Seteamos mensaje inicial de Captcha Status ---------------------------- */
$form_status_marquee__formMainID = $form_status_captcha_ini__formMainID;

/* // Inicia proceso de form luego de form.submit() ------------------------- */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

/* // Create variables for form data ---------------------------------------- */
    $data_nombre__formMainID = $_POST['data_nombre__formMainID'];
    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
    
/* // REF [50] Google reCaptcha --------------------------------------------- */
    $data_captchaResponseToken__formMainID = $_POST['data_captchaResponseToken__formMainID'];
    
// Construct the url to send your private Secret Key, token and (optionally) IP
// address of the form submitter to Google to get a spam rating for the
// submission. Las variables `$captcha_key_secret` y `$captcha_ip_remote`
// estan declaradas en `[/src/var/form.var.inc.php]`

    $captcha_url_siteverify = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $captcha_key_secret . '&response=' . $data_captchaResponseToken__formMainID . '&remoteip=' . $captcha_ip_remote;

/* // Save the response ----------------------------------------------------- */ 
// e.g. print_r($captcha_response) prints {
//   "success": true,
//   "challenge_ts": "2019-07-24T11:19:07Z",
//   "hostname": "domain.com",
//   "score": 0.9,
//   "action": "formID"
//   }

    $captcha_response = file_get_contents($captcha_url_siteverify);

/* // Decode the response --------------------------------------------------- */
// e.g. print_r($captcha_response_keys) prints Array (
//   [success] => 1
//   [challenge_ts] => 2019-07-24T11:19:07Z
//   [hostname] => domain.com
//   [score] => 0.9
//   [action] => formID
//   )

    $captcha_response_keys = json_decode($captcha_response, true);

// Check if the test was done OK, if the action name is correct and if the score
// is above your chosen threshold.

/* // Chequeamos que success sea 1 y que action corresponda con el id del form - */
    if ($captcha_response_keys["success"] && $captcha_response_keys["action"] == 'formMainID') {

/* // Chequeamos que el score sea superior al limite indicado --------------- */
// La variable `$captcha_score_treshold`
// esta declarada en `[/src/var/form.var.inc.php]`
        if ($captcha_response_keys["score"] >= $captcha_score_treshold) {
            
            $form_status_marquee__formMainID .= $form_status_captcha_OKsuccessTrue__formMainID . $data_captchaResponseToken__formMainID;

/* // INICIA VALIDACIÓN EN .form_validation_div ----------------------------- *
            if(!isset($data_nombre__formMainID) || trim($data_nombre__formMainID) == ''){
                $form_validation_div_msg__formMainID = $form_validation_msg_data_nombre__formMainID;
                $form_validation_div_class__formMainID = " form_validation_div_invalid";
                $form_validation_input_class_data_nombre__formMainID = " form_validation_input_invalid";
                $form_input_autofocus_data_nombre__formMainID = "autofocus";

            /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_div ----------------------------- */
        
/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
            if(!isset($data_nombre__formMainID) || trim($data_nombre__formMainID) == ''){
                $form_validation_span_msg_data_nombre__formMainID = $form_validation_msg_data_nombre__formMainID;
                $form_validation_span_class_data_nombre__formMainID = " form_validation_span_active";
                $form_validation_input_class_data_nombre__formMainID = " form_validation_input_invalid";
                $form_input_autofocus_data_nombre__formMainID = "autofocus";
                
            /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
                
/* // FIN de validacion en .form_validation_span ---------------------------- */
       
            } else {       
/* // Si todos los campos validan ------------------------------------------- */
                $form_status_marquee__formMainID .= $form_status_captcha_OKvalidacionOK__formMainID;
                
/* // Inicia $mail ---------------------------------------------------------- */
                $mail = new PHPMailer(true);
                try {
                    $mail->CharSet = PHPMailer::CHARSET_UTF8;

/* // $mail SMTPDebug ------------------------------------------------------- */
                    #$mail->SMTPDebug = 2;
                    #$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

/* // $mail Host de conexion SMTP ------------------------------------------- */
                    $mail->isSMTP();
                    #$mail->Host = 'localhost';
                    
/* // $mail Usuario y Password SMTP ----------------------------------------- */
                    $mail->SMTPAuth = true;
                    $mail->Username = $form_PHPMailer_account__formMainID;
                    $mail->Password = 'contrasena';
            
/* // $mail Seguridad TSL / SSL / Puertos ----------------------------------- */
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->SMTPSecure = 'ssl';

                    #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    #$mail->SMTPSecure = 'tls';

                    #$mail->Port = 25;
                    #$mail->Port = 26;
                    $mail->Port = 465;
                    #$mail->Port = 587;
                    
/* // Descomentar si el servidor SMTP tiene un certificado autofirmado ------ */
                    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
                    
/* // Descomentar si se requiere desactivar cifrado - (se suele usar en conjunto con la siguiente línea) - */
                    #$mail->SMTPSecure = false;
                    
/* // Descomentar si se requiere desactivar completamente TLS (sin cifrado) - */
                    #$mail->SMTPAutoTLS = false;
                    
/* // Direcciones remitente y destinatarios --------------------------------- */
                    $mail->setFrom($form_PHPMailer_account__formMainID, $site_name_form . ' Web Form');
            
                    $mail->addAddress('tampas@gmail.com');
                    $mail->addCC('gabrielvol@protonmail.com');
                    #$mail->addBCC('ggvv@hotmail.com.ar');

                    #$mail->addAddress($form_recipient__formMainID);
                    #$mail->addCC($form_recipient_CC__formMainID);
                    #$mail->addBCC($form_recipient_BCC__formMainID);
                    
/* // Cuerpo de mail y asunto ----------------------------------------------- */
                    $mail->isHTML(true);
                    $mail->Subject = 'Contacto Web PHPMailer con reCaptcha de ' . $data_nombre__formMainID . ' - ' . $form_id_spelled;
                    $mail->Body  = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '. $data_fullURL__formMainID .'</small><br /><br />';
                    $mail->Body .= '<small style="color:#666">Filtro: FiltroWebForm</small><br /><br />';
                    $mail->Body .= "<strong>Nombre:</strong> " . $data_nombre__formMainID . "<br />";  
                    
                    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
                    
                    $mail->Body .= '<br /><br /><strong>Errores:</strong><br />' . error_get_last()['message'];
                    
                    $mail->Body .= '<br><br>______<br><small style="color:#666">Fin del mensaje</small>';
                    
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
                    $form_status_pop__formMainID = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
                        . '<h2 id="formOK" class="'. $form_status_pop_h2_ok_classes__formMainID .'">' . $form_status_ok_globalA__formMainID.'</h2>'
/* // REF [29] Form Status OK, tick */
                        /* . '<h2 id="formOK" class="'. $form_status_pop_h2_ok_classes__formMainID .'"><span>'. $form_status_ok_globalA__formMainID.'</span></h2>' */
                        . '<p>'. $form_status_ok_globalB__formMainID .'</p>'
                        . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modal_global modal_formStatus"></div>';
                    
                    $form_validation_div_class__formMainID = 'displayNone';
                    
                  // $form_status_marquee__formMainID = '<p class="form_status_marquee form_status_ok">' . $form_status_ok_global__formMainID .'</p>';
/* // FIN mensaje ok en popup ----------------------------------------------- */
        
                    $mail->send();  
                    
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
                    $_POST['data_nombre__formMainID'] = '';
                    /* El resto de las variables se declaran en `[/src/common/form.var.data.php]` */
                
                } catch (Exception $e) {
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
                        $form_status_pop__formMainID = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                            . '<div role="document" tabindex="0">'
                            . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
                            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__formMainID .'">' . $form_status_error_globalA__formMainID .'</h2>'
                            . '<p>'. $form_status_error_globalB__formMainID .'</p>'
                            . '<p>'. $form_status_error_globalC__formMainID .'</p>'
                            . '<p class="pop_formStatus_error_inner">' . $mail->ErrorInfo . '</p>'
                            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                            . '</div>'
                            . '</div>'
                            . '<div class="modal_global modal_formStatus"></div>';
                        
                        $form_validation_div_class__formMainID = 'displayNone';
                        
                      // $form_status_marquee__formMainID = '<p class="form_status_marquee form_status_error">' . $form_status_error_global__formMainID . '</p>';
/* // FIN mensaje error en popup -------------------------------------------- */

                    // echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
                }
            }

/* // Si el score es menor al limite, pasa como spam ------------------------ */ 
        } elseif ($captcha_response_keys["score"] < $captcha_score_treshold) {
            $form_status_marquee__formMainID .= $form_status_captcha_ErrorScoreLow__formMainID;
            
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
            // TODO pop para sugerir otra forma de contacto cuando es spam
            
            $form_status_pop__formMainID = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
                . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__formMainID .'">' . $form_status_error_globalA__formMainID .'</h2>'
                . '<p>'. $form_status_error_globalB__formMainID .'</p>'
                . '<p>'. $form_status_error_globalC__formMainID .'</p>'
                . $form_status_captcha_ErrorScoreLow__formMainID
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div>'
                . '</div>'
                . '<div class="modal_global modal_formStatus"></div>';

        $form_validation_div_class__formMainID = 'displayNone';

        $form_status_marquee__formMainID = '';
/* // FIN mensaje error en popup -------------------------------------------- */
        }

/* // Si obtenemos mensajes de error ---------------------------------------- */ 
    } elseif($captcha_response_keys["error-codes"]) {
        
        $form_status_marquee__formMainID .= $form_status_captcha_ErrorSuccessFalse__formMainID;
                
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
        // TODO pop para sugerir otra forma de contacto cuando es spam
        
        $form_status_pop__formMainID = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
            . '<div role="document" tabindex="0">'
            . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__formMainID .'">' . $form_status_error_globalA__formMainID .'</h2>'
            . '<p>'. $form_status_error_globalB__formMainID .'</p>'
            . '<p>'. $form_status_error_globalC__formMainID .'</p>'
            . $form_status_captcha_ErrorSuccessFalse__formMainID 
            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
            . '</div>'
            . '</div>'
            . '<div class="modal_global modal_formStatus"></div>';

        $form_validation_div_class__formMainID = 'displayNone';

        $form_status_marquee__formMainID = '';    
/* // FIN mensaje error en popup -------------------------------------------- */

/* // Si success es false --------------------------------------------------- */ 
    } else {
    
        $form_status_marquee__formMainID .= $form_status_captcha_ErrorOther__formMainID;
    
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
        $form_status_pop__formMainID = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
            . '<div role="document" tabindex="0">'
            . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__formMainID .'">' . $form_status_error_globalA__formMainID .'</h2>'
            . '<p>'. $form_status_error_globalB__formMainID .'</p>'
            . '<p>'. $form_status_error_globalC__formMainID .'</p>'
            . $form_status_captcha_ErrorOther__formMainID
            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
            . '</div>'
            . '</div>'
            . '<div class="modal_global modal_formStatus"></div>';

        $form_validation_div_class__formMainID = 'displayNone';

        $form_status_marquee__formMainID = '';
/* // FIN mensaje error en popup -------------------------------------------- */
    }
}
?>
