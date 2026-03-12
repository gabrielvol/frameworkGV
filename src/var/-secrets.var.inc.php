<?php
/* * NombreDeProyecto * ========================================================
   Environmental Variables / Secrets [/src/var/secrets.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   Listado principal de includes de variables php.

   // REF [36] Form variables
   // REF [50] Google captcha
 * // REF [54] Domains

   #php #phpmailer #variables #captcha #secrets
*/

$ENV_form_PHPMailer_account = 'form' . '@' . $domain_main;
// $ENV_form_PHPMailer_account = ($domain_clean == $domain_ar) ? $site_email_FORM_AR_address : $site_email_FORM_MX_address;
$ENV_form_PHPMailer_SMTPhost = 'localhost';
$ENV_form_PHPMailer_password = 'pass';

$ENV_captcha_key_secret = 'captchakeysecret';