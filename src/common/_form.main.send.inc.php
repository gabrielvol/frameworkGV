<?php
/* // Form Status ----------------------------------------------------------- */
$form_status_ini_globalA__formMain      = _('Complete el formulario por favor.');
$form_status_ini_globalB__formMain      = _('Nos comunicaremos con Ud. a la brevedad.');
$form_status_ini_global__formMain       = $form_status_ini_globalA__formMain ." ". $form_status_ini_globalB__formMain;

$form_status_ok_globalA__formMain       = _('Env&iacute;o exitoso.');
$form_status_ok_globalB__formMain       = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');

$form_status_error_globalA__formMain    = _('Hubo un error al enviar el mensaje.');
$form_status_error_globalB__formMain    = _('Intente nuevamente m&aacute;s tarde.');
$form_status_error_globalC__formMain    = _('Puede comunicarse enviando un mensaje por correo electr&oacute;nico a') . ' <a href="'. $form_status_recipient_mailto__formMain .'" class="'. $form_status_pop_anchor_classes__formMain .'">'. $form_status_recipient__formMain .'</a>.';

$form_status_pop_h2_ok_classes__formMain    = 'mbm greenSystem alignCenter';
$form_status_pop_h2_error_classes__formMain = 'mbm errorColour alignCenter';
$form_status_pop_anchor_classes__formMain   = 'mbm alignCenter';

// $form_status__formMain = '<p class="form_status form_status_ini">'. $form_status_ini_global__formMain .'</p>';



/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__formMain                  = '';
$form_validation_div_class__formMain                = 'displayNone';

$form_validation_msg_data_nombre__formMain          = _("Por favor, ingrese su nombre.");
$form_validation_msg_data_apellido__formMain        = _("Por favor, ingrese su apellido.");
$form_validation_msg_data_nombreAp__formMain        = _("Por favor, ingrese su nombre y apellido.");
$form_validation_msg_data_nombreCo__formMain        = _("Por favor, ingrese su nombre completo.");
$form_validation_msg_data_username__formMain        = _("Por favor, ingrese un nombre de usuario.");
$form_validation_msg_data_cantidad__formMain        = _("Por favor, ingrese una cantidad.");
   
$form_validation_msg_data_direccion__formMain       = _("Por favor, ingrese su direcci&oacute;n.");
$form_validation_msg_data_ciudad__formMain          = _("Por favor, ingrese su ciudad.");
$form_validation_msg_data_domicilio__formMain       = _("Por favor, ingrese su domicilio.");
$form_validation_msg_data_localidad__formMain       = _("Por favor, ingrese su localidad.");
$form_validation_msg_data_codigoPostal__formMain    = _("Por favor, ingrese su c&oacute;digo postal."); 
$form_validation_msg_data_provincia__formMain       = _("Por favor, ingrese su provincia.");
$form_validation_msg_data_pais__formMain            = _("Por favor, ingrese su pa&iacute;s.");
   
$form_validation_msg_data_fecha__formMain           = _("Por favor, indique la fecha deseada.");
$form_validation_msg_data_dni__formMain             = _("Por favor, ingrese su n&uacute;mero de DNI.");
   
$form_validation_msg_data_email__formMain           = _("Por favor, ingrese una direcci&oacute;n de correo v&aacute;lida."); 
$form_validation_msg_data_telefono__formMain        = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
$form_validation_msg_data_celular__formMain         = _("Por favor, ingrese su n&uacute;mero de celular."); 
   
$form_validation_msg_data_webSite__formMain         = _("Por favor, ingrese su sitio web.");
$form_validation_msg_data_facebook__formMain        = _("Por favor, ingrese su perfil de Facebook.");
$form_validation_msg_data_instagram__formMain       = _("Por favor, ingrese su perfil de Instagram.");
$form_validation_msg_data_comoQueres__formMain      = _("Por favor, indique un medio de contacto.");
   
$form_validation_msg_data_empresa__formMain         = _("Por favor, ingrese el nombre de su empresa.");
$form_validation_msg_data_razonSocial__formMain     = _("Por favor, ingrese su raz&oacute;n social.");
$form_validation_msg_data_cargo__formMain           = _("Por favor, ingrese su cargo.");
$form_validation_msg_data_rubro__formMain           = _("Por favor, ingrese un rubro.");
$form_validation_msg_data_asunto__formMain          = _("Por favor, ingrese un asunto.");
   
$form_validation_msg_data_area__formMain            = _("Por favor, elija un &aacute;rea de contacto.");        
$form_validation_msg_data_newsletter__formMain      = _("Por favor, elija una opci&oacute;n.");
$form_validation_msg_data_mensaje__formMain         = _("Por favor, complete su mensaje.");



/* // Inicia proceso de form ------------------------------------------------ */
if (isset($_POST['button_form_submit__formMain'])){
//        ini_set('sendmail_from', 'tampas@gmail.com');
//        ini_set('smtp_port',465);
//        ini_set('SMTP','mail.dominio.com');
    

/*___ Asignamos datos de campos a variables ____________________________*/
    $data_nombre__formMain          = $_POST['data_nombre__formMain'];
    $data_apellido__formMain        = $_POST['data_apellido__formMain'];
    $data_nombreAp__formMain        = $_POST['data_nombreAp__formMain'];
    $data_nombreCo__formMain        = $_POST['data_nombreCo__formMain'];
    $data_username__formMain        = $_POST['data_username__formMain'];
    $data_cantidad__formMain        = $_POST['data_cantidad__formMain'];

    $data_genero__formMain          = $_POST['data_genero__formMain'];
    $data_dni__formMain             = $_POST['data_dni__formMain'];
    $data_fecha__formMain           = $_POST['data_fecha__formMain'];

    $data_direccion__formMain       = $_POST['data_direccion__formMain'];
    $data_ciudad__formMain          = $_POST['data_ciudad__formMain'];
    $data_domicilio__formMain       = $_POST['data_domicilio__formMain'];
    $data_localidad__formMain       = $_POST['data_localidad__formMain'];
    $data_codigoPostal__formMain    = $_POST['data_codigoPostal__formMain'];
    $data_provincia__formMain       = $_POST['data_provincia__formMain'];
    $data_pais__formMain            = $_POST['data_pais__formMain'];

    $data_email__formMain           = $_POST['data_email__formMain'];
    $data_telefono__formMain        = $_POST['data_telefono__formMain'];
    $data_celular__formMain         = $_POST['data_celular__formMain'];

    $data_webSite__formMain         = $_POST['data_webSite__formMain'];
    $data_facebook__formMain        = $_POST['data_facebook__formMain'];
    $data_instagram__formMain       = $_POST['data_instagram__formMain'];  
    $data_comoQueres__formMain      = $_POST['data_comoQueres__formMain'];        

    $data_empresa__formMain         = $_POST['data_empresa__formMain'];
    $data_razonSocial__formMain     = $_POST['data_razonSocial__formMain'];
    $data_cargo__formMain           = $_POST['data_cargo__formMain'];
    $data_rubro__formMain           = $_POST['data_rubro__formMain'];

    $data_asunto__formMain          = $_POST['data_asunto__formMain'];
    $data_area__formMain            = $_POST['data_area__formMain'];
    $data_mensaje__formMain         = $_POST['data_mensaje__formMain'];
    
    
/*___ Cabeceras del correo _____________________________________________*/
    $formMail_recipient  = $form_recipient__formMain;
    // $formMail_recipient  = $data_area__formMain;
    $formMail_asunto   = "Contacto Web de ". $data_nombre__formMain ." - ". $data_empresa__formMain;
    $formMail_headers  = "From: $data_nombre__formMain <$data_email__formMain>\r\n";
    //$formMail_headers .= "Reply-To: $data_email__formMain \r\n";
    $formMail_headers .= "Content-type: text/html\r\n";
    $formMail_headers .= "X-Mailer: PHP5\n";
    $formMail_headers .= 'MIME-Version: 1.0' . "\n";
    //$formMail_headers .= "CC: ". $form_recipient_CC__formMain ."\r\n";
    //$formMail_headers .= "BCC: ". $form_recipient_BCC__formMain ."\r\n";
    $formMail_texto  = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '. $data_fullURL__formMain .'</small><br /><br />';
    $formMail_texto .= "<strong>Nombre:</strong> ". $data_nombre__formMain ."<br />";
    $formMail_texto .= "<strong>Apellido:</strong> ". $data_apellido__formMain ."<br />";
    $formMail_texto .= "<strong>Nombre y apellido:</strong> ". $data_nombreAp__formMain ."<br />";
    $formMail_texto .= "<strong>Nombre completo:</strong> ". $data_nombreCo__formMain ."<br />";
    $formMail_texto .= "<strong>Nombre de usuario:</strong> ". $data_username__formMain ."<br />";
    $formMail_texto .= "<strong>Direcci&oacute;n:</strong> ". $data_direccion__formMain ."<br />";
    $formMail_texto .= "<strong>Ciudad:</strong> ". $data_ciudad__formMain ."<br />";
    $formMail_texto .= "<strong>Domicilio:</strong> ". $data_domicilio__formMain ."<br />";
    $formMail_texto .= "<strong>Sexo:</strong> ". $data_genero__formMain ."<br />";
    $formMail_texto .= "<strong>Cantidad:</strong> ". $data_cantidad__formMain ."<br />";
    $formMail_texto .= "<strong>DNI:</strong> ". $data_dni__formMain ."<br />";
    $formMail_texto .= "<strong>C&oacute;digo postal:</strong> ". $data_codigoPostal__formMain ."<br />";
    $formMail_texto .= "<strong>Localidad:</strong> ". $data_localidad__formMain ."<br />";
    $formMail_texto .= "<strong>Provincia:</strong> ". $data_provincia__formMain ."<br />";
    $formMail_texto .= "<strong>Pa&iacute;s:</strong> ". $data_pais__formMain ."<br />";
    $formMail_texto .= "<strong>Fecha:</strong> ". $data_fecha__formMain ."<br />";
    $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> '. $data_email__formMain ."<br />";
    $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> <a mailto="'. $data_email__formMain .'">'. $data_email__formMain ."</a><br />";
    $formMail_texto .= "<strong>Sitio web:</strong> ". $data_webSite__formMain ."<br />";
    $formMail_texto .= "<strong>Perfil de Facebook:</strong> ". $data_facebook__formMain ."<br />";
    $formMail_texto .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/'. $data_instagram__formMain .'">'. $data_instagram__formMain ."</a><br />";
    $formMail_texto .= "<strong>Tel&eacute;fono:</strong> ". $data_telefono__formMain ."<br />";
    $formMail_texto .= "<strong>Celular:</strong> ". $data_celular ."<br />";
    $formMail_texto .= "<strong>Empresa:</strong> ". $data_empresa__formMain ."<br />";
    $formMail_texto .= "<strong>Raz&oacute;n Social:</strong> ". $data_razonSocial__formMain ."<br />";
    $formMail_texto .= "<strong>Cargo:</strong> ". $data_cargo__formMain ."<br />";
    $formMail_texto .= "<strong>Asunto:</strong> ". $data_asunto__formMain ."<br />";
    $formMail_texto .= "<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ". $data_comoQueres__formMain ."<br />";
    $formMail_texto .= "<strong>Rubro:</strong> ". $data_rubro__formMain ."<br />";
    $formMail_texto .= "<br /><strong>Mensaje:</strong><br />". $data_mensaje__formMain;
    $formMail_texto .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';



/* // INICIA VALIDACIÓN EN .form_validation_div ----------------------------- */
    if (empty($_POST["data_nombre__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_nombre__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_nombre__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMain         = "autofocus";

    } elseif (empty($_POST["data_apellido__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_apellido__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_apellido__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_apellido__formMain       = "autofocus";

    } elseif (empty($_POST["data_nombreAp__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_nombreAp__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_nombreAp__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_nombreAp__formMain       = "autofocus";

    } elseif (empty($_POST["data_nombreCo__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_nombreCo__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_nombreCo__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_nombreCo__formMain       = "autofocus";

    } elseif (empty($_POST["data_username__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_username__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_username__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_username__formMain       = "autofocus";

    } elseif (empty($_POST["data_dni__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_dni__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_dni__formMain        = " form_validation_input_invalid";
        $form_input_autofocus_data_dni__formMain            = "autofocus";

    } elseif (empty($_POST["data_direccion__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_direccion__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_direccion__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_direccion__formMain      = "autofocus";

    } elseif (empty($_POST["data_ciudad__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_ciudad__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_ciudad__formMain     = " form_validation_input_invalid";
        $form_input_autofocus_data_ciudad__formMain         = "autofocus";

    } elseif (empty($_POST["data_domicilio__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_domicilio__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_domicilio__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_domicilio__formMain      = "autofocus";

    } elseif (empty($_POST["data_localidad__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_localidad__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_localidad__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_localidad__formMain      = "autofocus";

    } elseif (empty($_POST["data_codigoPostal__formMain"])) {
        $form_validation_div_msg__formMain                          = $form_validation_msg_data_codigoPostal__formMain;
        $form_validation_div_class__formMain                        = " form_validation_div_invalid";
        $form_validation_input_class_data_codigoPostal__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_codigoPostal__formMain       = "autofocus";

    } elseif (empty($_POST["data_provincia__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_provincia__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_provincia__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_provincia__formMain      = "autofocus";

    } elseif (empty($_POST["data_pais__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_pais__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_pais__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_pais__formMain       = "autofocus";

    } elseif (empty($_POST["data_telefono__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_telefono__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_telefono__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_telefono__formMain       = "autofocus";

    } elseif (empty($_POST["data_celular__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_celular__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_celular__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_celular__formMain        = "autofocus";

    } elseif (empty($_POST["data_email__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_email__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_email__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_email__formMain          = "autofocus";

    } elseif (empty($_POST["data_webSite__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_webSite__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_webSite__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_webSite__formMain        = "autofocus";

    } elseif (empty($_POST["data_facebook__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_facebook__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_facebook__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_facebook__formMain       = "autofocus";

    } elseif (empty($_POST["data_comoQueres__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_comoQueres__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_comoQueres__formMain = " form_validation_input_invalid";
        $form_input_autofocus_data_comoQueres__formMain     = "autofocus";

    } elseif (empty($_POST["data_empresa__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_empresa__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_empresa__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_empresa__formMain        = "autofocus";

    } elseif (empty($_POST["data_razonSocial__formMain"])) {
        $form_validation_div_msg__formMain                          = $form_validation_msg_data_razonSocial__formMain;
        $form_validation_div_class__formMain                        = " form_validation_div_invalid";
        $form_validation_input_class_data_razonSocial__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_razonSocial__formMain        = "autofocus";

    } elseif (empty($_POST["data_cargo__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_cargo__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_cargo__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_cargo__formMain      = "autofocus";

    } elseif (empty($_POST["data_asunto__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_asunto__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_cargo__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_cargo__formMain      = "autofocus";

    } elseif (empty($_POST["data_fecha__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_fecha__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_fecha__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_fecha__formMain      = "autofocus";

    } elseif (empty($_POST["data_rubro__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_rubro__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_rubro__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_rubro__formMain      = "autofocus";

    } elseif (empty($_POST["data_newsletter__formMain"])) {
        $form_validation_div_msg__formMain                      = $form_validation_msg_data_newsletter__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_newsletter__formMain = " form_validation_input_invalid";
        $form_input_autofocus_data_newsletter__formMain     = "autofocus";

    } elseif (empty($_POST["data_mensaje__formMain"])) {
        $form_validation_div_msg__formMain                      = $errordata_mensaje__formMain;
        $form_validation_div_class__formMain                    = " form_validation_div_invalid";
        $form_validation_input_class_data_mensaje__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_mensaje__formMain        = "autofocus";

    } elseif (empty($_POST["data_area__formMain"])) {
        $form_validation_div_msg__formMain                  = $form_validation_msg_data_area__formMain;
        $form_validation_div_class__formMain                = " form_validation_div_invalid";
        $form_validation_input_class_data_area__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_area__formMain       = "autofocus";
/* // FIN de validacion en .form_validation_div ----------------------------- */



/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
    if (empty($_POST["data_nombre__formMain"])) {
        $form_validation_span_msg_data_nombre__formMain         = $form_validation_msg_data_nombre__formMain;
        $form_validation_span_class_data_nombre__formMain         = " form_validation_span_active";
        $form_validation_input_class_data_nombre__formMain     = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__formMain         = "autofocus";

    } elseif (empty($_POST["data_apellido__formMain"])) {
        $form_validation_span_msg_data_apellido__formMain       = $form_validation_msg_data_apellido__formMain;
        $form_validation_span_class_data_apellido__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_apellido__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_apellido__formMain       = "autofocus";

    } elseif (empty($_POST["data_nombreAp__formMain"])) {
        $form_validation_span_msg_data_nombreAp__formMain       = $form_validation_msg_data_nombreAp__formMain;
        $form_validation_span_class_data_nombreAp__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_nombreAp__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_nombreAp__formMain       = "autofocus";

    } elseif (empty($_POST["data_nombreCo__formMain"])) {
        $form_validation_span_msg_data_nombreCo__formMain       = $form_validation_msg_data_nombreCo__formMain;
        $form_validation_span_class_data_nombreCo__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_nombreCo__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_nombreCo__formMain       = "autofocus";

    } elseif (empty($_POST["data_username__formMain"])) {
        $form_validation_span_msg_data_username__formMain       = $form_validation_msg_data_username__formMain;
        $form_validation_span_class_data_username__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_username__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_username__formMain       = "autofocus";

    } elseif (empty($_POST["data_dni__formMain"])) {
        $form_validation_span_msg_data_dni__formMain            = $form_validation_msg_data_dni__formMain;
        $form_validation_span_class_data_dni__formMain            = " form_validation_span_active";
        $form_validation_input_class_data_dni__formMain        = " form_validation_input_invalid";
        $form_input_autofocus_data_dni__formMain            = "autofocus";

    } elseif (empty($_POST["data_direccion__formMain"])) {
        $form_validation_span_msg_data_direccion__formMain      = $form_validation_msg_data_direccion__formMain;
        $form_validation_span_class_data_direccion__formMain      = " form_validation_span_active";
        $form_validation_input_class_data_direccion__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_direccion__formMain      = "autofocus";

    } elseif (empty($_POST["data_ciudad__formMain"])) {
        $form_validation_span_msg_data_ciudad__formMain         = $form_validation_msg_data_ciudad__formMain;
        $form_validation_span_class_data_ciudad__formMain         = " form_validation_span_active";
        $form_validation_input_class_data_ciudad__formMain     = " form_validation_input_invalid";
        $form_input_autofocus_data_ciudad__formMain         = "autofocus";

    } elseif (empty($_POST["data_domicilio__formMain"])) {
        $form_validation_span_msg_data_domicilio__formMain      = $form_validation_msg_data_domicilio__formMain;
        $form_validation_span_class_data_domicilio__formMain      = " form_validation_span_active";
        $form_validation_input_class_data_domicilio__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_domicilio__formMain      = "autofocus";

    } elseif (empty($_POST["data_localidad__formMain"])) {
        $form_validation_span_msg_data_localidad__formMain      = $form_validation_msg_data_localidad__formMain;
        $form_validation_span_class_data_localidad__formMain      = " form_validation_span_active";
        $form_validation_input_class_data_localidad__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_localidad__formMain      = "autofocus";

    } elseif (empty($_POST["data_codigoPostal__formMain"])) {
        $form_validation_span_msg_data_codigoPostal__formMain   = $form_validation_msg_data_codigoPostal__formMain;
        $form_validation_span_class_data_codigoPostal__formMain   = " form_validation_span_active";
        $form_validation_input_class_data_codigoPostal__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_codigoPostal__formMain   = "autofocus";

    } elseif (empty($_POST["data_provincia__formMain"])) {
        $form_validation_span_msg_data_provincia__formMain      = $form_validation_msg_data_provincia__formMain;
        $form_validation_span_class_data_provincia__formMain      = " form_validation_span_active";
        $form_validation_input_class_data_provincia__formMain  = " form_validation_input_invalid";
        $form_input_autofocus_data_provincia__formMain      = "autofocus";

    } elseif (empty($_POST["data_pais__formMain"])) {
        $form_validation_span_msg_data_pais__formMain           = $form_validation_msg_data_pais__formMain;
        $form_validation_span_class_data_pais__formMain           = " form_validation_span_active";
        $form_validation_input_class_data_pais__formMain       = " form_validation_input_invalid";
        $form_input_autofocus_data_pais__formMain           = "autofocus";

    } elseif (empty($_POST["data_celular__formMain"])) {
        $form_validation_span_msg_data_celular__formMain        = $form_validation_msg_data_celular__formMain;
        $form_validation_span_class_data_celular__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_celular__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_celular__formMain        = "autofocus";

    } elseif (empty($_POST["data_telefono__formMain"])) {
        $form_validation_span_msg_data_telefono__formMain       = $form_validation_msg_data_telefono__formMain;
        $form_validation_span_class_data_telefono__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_telefono__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_telefono__formMain       = "autofocus";

    } elseif (empty($_POST["data_email__formMain"])) {
        $form_validation_span_msg_data_email__formMain          = $form_validation_msg_data_email__formMain;
        $form_validation_span_class_data_email__formMain          = " form_validation_span_active";
        $form_validation_input_class_data_email__formMain      = " form_validation_input_invalid";
        $form_input_autofocus_data_email__formMain          = "autofocus";

    } elseif (empty($_POST["data_webSite__formMain"])) {
        $form_validation_span_msg_data_webSite__formMain        = $form_validation_msg_data_webSite__formMain;
        $form_validation_span_class_data_webSite__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_webSite__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_webSite__formMain        = "autofocus";

    } elseif (empty($_POST["data_facebook__formMain"])) {
        $form_validation_span_msg_data_facebook__formMain       = $form_validation_msg_data_facebook__formMain;
        $form_validation_span_class_data_facebook__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_facebook__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_facebook__formMain       = "autofocus";

    } elseif (empty($_POST["data_empresa__formMain"])) {
        $form_validation_span_msg_data_empresa__formMain        = $form_validation_msg_data_empresa__formMain;
        $form_validation_span_class_data_empresa__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_empresa__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_empresa__formMain        = "autofocus";

    } elseif (empty($_POST["data_razonSocial__formMain"])) {
        $form_validation_span_msg_data_razonSocial__formMain        = $form_validation_msg_data_razonSocial__formMain;
        $form_validation_span_class_data_razonSocial__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_razonSocial__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_razonSocial__formMain        = "autofocus";

    } elseif (empty($_POST["data_cargo__formMain"])) {
        $form_validation_span_msg_data_cargo__formMain          = $form_validation_msg_data_cargo__formMain;
        $form_validation_span_class_data_cargo__formMain          = " form_validation_span_active";
        $form_validation_input_class_data_cargo__formMain      = " form_validation_input_invalid";
        $form_input_autofocus_data_cargo__formMain          = "autofocus";

    } elseif (empty($_POST["data_fecha__formMain"])) {
        $form_validation_span_msg_data_fecha__formMain          = $form_validation_msg_data_fecha__formMain;
        $form_validation_span_class_data_fecha__formMain          = " form_validation_span_active";
        $form_validation_input_class_data_fecha__formMain      = " form_validation_input_invalid";
        $form_input_autofocus_data_fecha__formMain          = "autofocus";

    } elseif (empty($_POST["data_cantidad__formMain"])) {
        $form_validation_span_msg_data_cantidad__formMain       = $form_validation_msg_data_cantidad__formMain;
        $form_validation_span_class_data_cantidad__formMain       = " form_validation_span_active";
        $form_validation_input_class_data_cantidad__formMain   = " form_validation_input_invalid";
        $form_input_autofocus_data_cantidad__formMain       = "autofocus";

    } elseif (empty($_POST["data_rubro__formMain"])) {
        $form_validation_span_msg_data_rubro__formMain          = $form_validation_msg_data_rubro__formMain;
        $form_validation_span_class_data_rubro__formMain          = " form_validation_span_active";
        $form_validation_input_class_data_rubro__formMain      = " form_validation_input_invalid";
        $form_input_autofocus_data_rubro__formMain          = "autofocus";

    } elseif (empty($_POST["data_comoQueres__formMain"])) {
        $form_validation_span_msg_data_comoQueres__formMain     = $form_validation_msg_data_comoQueres__formMain;
        $form_validation_span_class_data_comoQueres__formMain     = " form_validation_span_active";
        $form_validation_input_class_data_comoQueres__formMain = " form_validation_input_invalid";
        $form_input_autofocus_data_comoQueres__formMain     = "autofocus";

    } elseif (empty($_POST["data_asunto__formMain"])) {
        $form_validation_span_msg_data_asunto__formMain         = $form_validation_msg_data_asunto__formMain;
        $form_validation_span_class_data_asunto__formMain         = " form_validation_span_active";
        $form_validation_input_class_data_asunto__formMain     = " form_validation_input_invalid";
        $form_input_autofocus_data_asunto__formMain         = "autofocus";

    } elseif (empty($_POST["data_area__formMain"])) {
        $form_validation_span_msg_data_area__formMain           = $form_validation_msg_data_area__formMain;
        $form_validation_span_class_data_area__formMain           = " form_validation_span_active";
        $form_validation_input_class_data_area__formMain          = " form_validation_input_invalid";
        // $form_input_autofocus_data_area__formMain        = "autofocus";

    } elseif (empty($_POST["data_mensaje__formMain"])) {
        $form_validation_span_msg_data_mensaje__formMain        = $form_validation_msg_data_mensaje__formMain;
        $form_validation_span_class_data_mensaje__formMain        = " form_validation_span_active";
        $form_validation_input_class_data_mensaje__formMain    = " form_validation_input_invalid";
        $form_input_autofocus_data_mensaje__formMain        = "autofocus";
/* // FIN de validacion en .form_validation_span ---------------------------- */

        

    } else {
/* // Si todos los campos validan se envia el correo ------------------------ */
        if(mail($formMail_recipient, $formMail_asunto, $formMail_texto, $formMail_headers)){

    // echo '<META HTTP-EQUIV="Refresh" Content="0;URL='. $url_gracias_full .'">';


                   
/* // INICIA MENSAJE OK EN $form_status_ ------------------------------------ */
            $form_status__formMain = '<p class="form_status form_status_ok" role="alert" autofocus>'. _("$form_status_ok_globalA__formMain") .' '. _("$form_status_ok_globalB__formMain") .'</p>';
            $form_validation_div_class__formMain = 'displayNone';
/* // FIN mensaje ok en $form_status_ --------------------------------------- */
            
            
            
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
            $form_status_pop__formMain = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                . '<div role="document" tabindex="0">'
                . '<button type="submit" class="button_pop_close hover_grow_S_ani" aria-pressed="false">'._("Cerrar").'</button>'
                . '<h2 id="formOK" class="'. $form_status_pop_h2_ok_classes__formMain .'">'._("$form_status_ok_globalA__formMain").'</h2>'
                . '<p>'. _("$form_status_ok_globalB__formMain") .'</p>'
                . '<button type="submit" class="button_pop_submit" aria-pressed="false">'. _("OK") .'</button>'
                . '</div>'
                . '</div>'
                . '<div class="modal_global modal_formStatus"></div>';
            $form_validation_div_class__formMain    = 'displayNone';
            $form_status__formMain                  = '';
/* // FIN mensaje ok en popup ----------------------------------------------- */
            
            
            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
            $_POST['data_nombre__formMain']         = '';
            $_POST['data_apellido__formMain']       = '';
            $_POST['data_nombreAp__formMain']       = '';     
            $_POST['data_nombreCo__formMain']       = '';               
            $_POST['data_genero__formMain']         = '';
            $_POST['data_direccion__formMain']      = '';
            $_POST['data_ciudad__formMain']         = '';
            $_POST['data_domicilio__formMain']      = '';
            $_POST['data_localidad__formMain']      = '';
            $_POST['data_codigoPostal__formMain']   = '';
            $_POST['data_provincia__formMain']      = '';
            $_POST['data_pais__formMain']           = '';
            $_POST['data_fecha__formMain']          = '';
            $_POST['data_email__formMain']          = '';
            $_POST['data_webSite__formMain']        = '';
            $_POST['data_facebook__formMain']       = '';
            $_POST['data_telefono__formMain']       = '';
            $_POST['data_celular__formMain']        = '';
            $_POST['data_empresa__formMain']        = '';
            $_POST['data_razonSocial__formMain']    = '';
            $_POST['data_cargo__formMain']          = '';
            $_POST['data_rubro__formMain']          = '';
            $_POST['data_comoQueres__formMain']     = '';
            $_POST['data_asunto__formMain']         = '';
            $_POST['data_mensaje__formMain']        = '';

        } else {
            
            
            
/* // INICIA MENSAJE ERROR EN $form_status_ --------------------------------- */
            $form_status__formMain = '<p class="form_status form_status_error" role="alert" autofocus>'. _("$form_status_error_globalA__formMain") .' <span class="displayBlock">'. _("$form_status_error_globalB__formMain") .'</span></p>';
            $form_validation_div_class__formMain = 'displayNone';
/* // FIN mensaje error en $form_status_ ------------------------------------ */
            
            
            
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
            $form_status_pop__formMain = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="submit" class="button_pop_close hover_grow_S_ani" aria-pressed="false">'. _("Cerrar") .'</button>'
                . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__formMain .'">'. _("$form_status_error_globalA__formMain") .'</h2>'
                . '<p>'. _("$form_status_error_globalB__formMain") .'</p>'
                . '<p>'. _("$form_status_error_globalC__formMain") .'</p>'
                . '<button type="submit" class="button_pop_submit" aria-pressed="false">'. _("OK") .'</button>'
                . '</div>'
                . '</div>'
                . '<div class="modal_global modal_formStatus"></div>';
            $form_validation_div_class__formMain    = 'displayNone';
            $form_status__formMain                  = '';
/* // FIN mensaje error en popup -------------------------------------------- */
        }
    }
}
?>