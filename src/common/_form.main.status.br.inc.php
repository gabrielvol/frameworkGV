<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/common/form.main.status.br.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Fechar';
$form_status_pop_h2_ok_classes__formMain    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__formMain = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__formMain   = 'mbm txAlignCenter';

$form_status_ini_globalA__formMain      = 'Por favor, preencha o formulário.';
$form_status_ini_globalB__formMain      = 'Entraremos em contato com você em breve.';
$form_status_ini_global__formMain       = $form_status_ini_globalA__formMain . ' ' . $form_status_ini_globalB__formMain;

$form_status_ok_globalA__formMain       = 'Mensagem enviada!';
$form_status_ok_globalB__formMain       = 'Os dados foram enviados corretamente. Muito obrigado.';
$form_status_ok_global__formMain        = $form_status_ok_globalA__formMain . ' ' . $form_status_ok_globalB__formMain;

$form_status_error_globalA__formMain    = 'Houve um erro ao enviar a mensagem.';
$form_status_error_globalB__formMain    = 'Por favor, tente novamente mais tarde.';
$form_status_error_globalC__formMain    = 'Você pode entrar em contato enviando um e-mail para <a href="' . $form_status_recipient_mailto__formMain . '" class="' . $form_status_pop_anchor_classes__formMain . '">' . $form_status_recipient__formMain . '</a>.';
$form_status_error_global__formMain     = $form_status_error_globalA__formMain . ' ' . $form_status_error_globalB__formMain . ' ' . $form_status_error_globalC__formMain;

// $form_status_marquee__formMainID = '<p class="form_status form_status_ini">'. $form_status_ini_global__formMain .'</p>';


/* // Captcha Status -------------------------------------------------------- */
$form_status_captcha_ini__formMain                    = '<p class="form_status form_status_captcha">Captcha: todavía no se ejecuta la validación</p>';
$form_status_captcha_ok_tokenConseguido__formMain         = '<p class="form_status form_status_captcha">Token Conseguido: </p>';
$form_status_captcha_ok_successTrue__formMain         = '<p class="form_status form_status_captcha">Captcha: success true!</p>';
$form_status_ok_validation__formMain                  = '<p class="form_status form_status_captcha">Captcha: Form. Validación OK! Ahora corre PHPMailer</p>';
$form_status_captcha_error_lowScore__formMain         = '<p class="form_status form_status_captcha">Captcha: Error. Score menor a 0.5</p>';
$form_status_captcha_error_successFalse__formMain     = '<p class="form_status form_status_captcha">Captcha: Error. Success false</p>';
$form_status_captcha_error_other__formMain            = '<p class="form_status form_status_captcha">Captcha: Error. Otro tipo de error</p>';


/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__formMain                  = '';
$form_validation_div_class__formMain                = 'displayNone';

$form_validation_msg_data_nombre__formMain          = 'Por favor, digite seu nome.';
$form_validation_msg_data_apellido__formMain        = 'Por favor, digite seu sobrenome.';
$form_validation_msg_data_nombreAp__formMain        = 'Por favor, digite seu nome e sobrenome.';
$form_validation_msg_data_nombreCo__formMain        = 'Por favor, digite seu nome completo.';
$form_validation_msg_data_cantidad__formMain        = 'Por favor, informe uma quantidade.';

$form_validation_msg_data_direccion__formMain       = 'Por favor, digite seu endereço.';
$form_validation_msg_data_ciudad__formMain          = 'Por favor, digite sua cidade.';
$form_validation_msg_data_domicilio__formMain       = 'Por favor, digite seu domicílio.';
$form_validation_msg_data_localidad__formMain       = 'Por favor, digite sua localidade.';
$form_validation_msg_data_codigoPostal__formMain    = 'Por favor, digite seu código postal.';
$form_validation_msg_data_provincia__formMain       = 'Por favor, digite seu estado.';
$form_validation_msg_data_pais__formMain            = 'Por favor, digite seu país.';

$form_validation_msg_data_fecha__formMain           = 'Por favor, indique a data desejada.';
$form_validation_msg_data_dni__formMain             = 'Por favor, digite seu número de documento.';

$form_validation_msg_data_email__formMain           = 'Por favor, digite um e-mail válido.';
$form_validation_msg_data_telefono__formMain        = 'Por favor, digite seu número de telefone.';
$form_validation_msg_data_celular__formMain         = 'Por favor, digite seu número de celular.';
$form_validation_msg_data_whatsAppAreaCode__formMain = 'Por favor, digite o código de área.';
$form_validation_msg_data_whatsAppNumber__formMain  = 'Por favor, digite seu número.';

$form_validation_msg_data_webSite__formMain         = 'Por favor, digite seu site.';
$form_validation_msg_data_facebook__formMain        = 'Por favor, digite seu perfil do Facebook.';
$form_validation_msg_data_instagram__formMain       = 'Por favor, digite seu perfil do Instagram.';
$form_validation_msg_data_comoQueres__formMain      = 'Por favor, informe um meio de contato.';

$form_validation_msg_data_empresa__formMain         = 'Por favor, digite o nome da sua empresa.';
$form_validation_msg_data_razonSocial__formMain     = 'Por favor, digite a razão social.';
$form_validation_msg_data_cargo__formMain           = 'Por favor, digite seu cargo.';
$form_validation_msg_data_rubro__formMain           = 'Por favor, digite um setor.';
$form_validation_msg_data_asunto__formMain          = 'Por favor, digite um assunto.';

$form_validation_msg_data_username__formMain        = 'Por favor, digite seu nome de usuário.';
$form_validation_msg_data_password__formMain        = 'Por favor, digite sua senha.';

$form_validation_msg_data_area__formMain            = 'Por favor, selecione uma área de contato.';
$form_validation_msg_data_newsletter__formMain      = 'Por favor, selecione uma opção.';
$form_validation_msg_data_mensaje__formMain         = 'Por favor, escreva sua mensagem.';

?>
