<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/common/form.main.status.br.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Fechar';
$form_status_pop_h2_ok_classes__formMainID    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__formMainID = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__formMainID   = 'mbm txAlignCenter';

$form_status_ini_globalA__formMainID      = 'Por favor, preencha o formulário.';
$form_status_ini_globalB__formMainID      = 'Entraremos em contato com você em breve.';
$form_status_ini_global__formMainID       = $form_status_ini_globalA__formMainID . ' ' . $form_status_ini_globalB__formMainID;

$form_status_ok_globalA__formMainID       = 'Mensagem enviada!';
$form_status_ok_globalB__formMainID       = 'Os dados foram enviados corretamente. Muito obrigado.';
$form_status_ok_global__formMainID        = $form_status_ok_globalA__formMainID . ' ' . $form_status_ok_globalB__formMainID;

$form_status_error_globalA__formMainID    = 'Houve um erro ao enviar a mensagem.';
$form_status_error_globalB__formMainID    = 'Por favor, tente novamente mais tarde.';
$form_status_error_globalC__formMainID    = 'Você pode entrar em contato enviando um e-mail para <a href="' . $form_status_recipient_mailto__formMainID . '" class="' . $form_status_pop_anchor_classes__formMainID . '">' . $form_status_recipient__formMainID . '</a>';
$form_status_error_global__formMainID     = $form_status_error_globalA__formMainID . ' ' . $form_status_error_globalB__formMainID . ' ' . $form_status_error_globalC__formMainID;

// $form_status_marquee__formMainID = '<p class="form_status form_status_ini">'. $form_status_ini_global__formMainID .'</p>';


/* // Captcha Status -------------------------------------------------------- */
$form_status_captcha_ini__formMainID                    = '<p class="form_status form_status_captcha">Captcha: todavía no se ejecuta la validación</p>';
$form_status_captcha_ok_tokenConseguido__formMainID         = '<p class="form_status form_status_captcha">Token Conseguido: </p>';
$form_status_captcha_ok_successTrue__formMainID         = '<p class="form_status form_status_captcha">Captcha: success true!</p>';
$form_status_ok_validation__formMainID                  = '<p class="form_status form_status_captcha">Captcha: Form. Validación OK! Ahora corre PHPMailer</p>';
$form_status_captcha_error_lowScore__formMainID         = '<p class="form_status form_status_captcha">Captcha: Error. Score menor a 0.5</p>';
$form_status_captcha_error_successFalse__formMainID     = '<p class="form_status form_status_captcha">Captcha: Error. Success false</p>';
$form_status_captcha_error_other__formMainID            = '<p class="form_status form_status_captcha">Captcha: Error. Otro tipo de error</p>';


/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__formMainID                  = '';
$form_validation_div_class__formMainID                = 'displayNone';

$form_validation_msg_data_nombre__formMainID          = 'Por favor, digite seu nome.';
$form_validation_msg_data_apellido__formMainID        = 'Por favor, digite seu sobrenome.';
$form_validation_msg_data_nombreAp__formMainID        = 'Por favor, digite seu nome e sobrenome.';
$form_validation_msg_data_nombreCo__formMainID        = 'Por favor, digite seu nome completo.';
$form_validation_msg_data_cantidad__formMainID        = 'Por favor, informe uma quantidade.';

$form_validation_msg_data_direccion__formMainID       = 'Por favor, digite seu endereço.';
$form_validation_msg_data_ciudad__formMainID          = 'Por favor, digite sua cidade.';
$form_validation_msg_data_domicilio__formMainID       = 'Por favor, digite seu domicílio.';
$form_validation_msg_data_localidad__formMainID       = 'Por favor, digite sua localidade.';
$form_validation_msg_data_codigoPostal__formMainID    = 'Por favor, digite seu código postal.';
$form_validation_msg_data_provincia__formMainID       = 'Por favor, digite seu estado.';
$form_validation_msg_data_pais__formMainID            = 'Por favor, digite seu país.';

$form_validation_msg_data_fecha__formMainID           = 'Por favor, indique a data desejada.';
$form_validation_msg_data_dni__formMainID             = 'Por favor, digite seu número de documento.';

$form_validation_msg_data_email__formMainID           = 'Por favor, digite um e-mail válido.';
$form_validation_msg_data_telefono__formMainID        = 'Por favor, digite seu número de telefone.';
$form_validation_msg_data_celular__formMainID         = 'Por favor, digite seu número de celular.';
$form_validation_msg_data_whatsAppAreaCode__formMainID = 'Por favor, digite o código de área.';
$form_validation_msg_data_whatsAppNumber__formMainID  = 'Por favor, digite seu número.';

$form_validation_msg_data_webSite__formMainID         = 'Por favor, digite seu site.';
$form_validation_msg_data_facebook__formMainID        = 'Por favor, digite seu perfil do Facebook.';
$form_validation_msg_data_instagram__formMainID       = 'Por favor, digite seu perfil do Instagram.';
$form_validation_msg_data_comoQueres__formMainID      = 'Por favor, informe um meio de contato.';

$form_validation_msg_data_empresa__formMainID         = 'Por favor, digite o nome da sua empresa.';
$form_validation_msg_data_razonSocial__formMainID     = 'Por favor, digite a razão social.';
$form_validation_msg_data_cargo__formMainID           = 'Por favor, digite seu cargo.';
$form_validation_msg_data_rubro__formMainID           = 'Por favor, digite um setor.';
$form_validation_msg_data_asunto__formMainID          = 'Por favor, digite um assunto.';

$form_validation_msg_data_username__formMainID        = 'Por favor, digite seu nome de usuário.';
$form_validation_msg_data_password__formMainID        = 'Por favor, digite sua senha.';

$form_validation_msg_data_area__formMainID            = 'Por favor, selecione uma área de contato.';
$form_validation_msg_data_newsletter__formMainID      = 'Por favor, selecione uma opção.';
$form_validation_msg_data_mensaje__formMainID         = 'Por favor, escreva sua mensagem.';

?>
