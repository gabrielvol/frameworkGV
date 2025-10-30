<?php
/* * NombreDeProyecto * ========================================================
   Email Variables [/src/var/email.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */

/* // Domain main ----------------------------------------------------------- */
$site_email_FORM         = 'form';
$site_email_FORM_address = $site_email_FORM . '@' . $domain_main;
$site_email_FORM_mailto  = 'mailto:' . $site_email_FORM_address;
$site_email_FORM_href    = 'href="' . $site_email_FORM_mailto . '"';
$site_email_FORM_anchor  = '<a ' . $site_email_FORM_href . '>' . $site_email_FORM_address . '</a>';

$site_email_CONTACTO         = 'contacto';
$site_email_CONTACTO_address = $site_email_CONTACTO . '@' . $domain_main;
$site_email_CONTACTO_mailto  = 'mailto:' . $site_email_CONTACTO_address;
$site_email_CONTACTO_href    = 'href="' . $site_email_CONTACTO_mailto . '"';
$site_email_CONTACTO_anchor  = '<a ' . $site_email_CONTACTO_href . '>' . $site_email_CONTACTO_address . '</a>';

$site_email_VENTAS         = 'ventas';
$site_email_VENTAS_address = $site_email_VENTAS . '@' . $domain_main;
$site_email_VENTAS_mailto  = 'mailto:' . $site_email_VENTAS_address;
$site_email_VENTAS_href    = 'href="' . $site_email_VENTAS_mailto . '"';
$site_email_VENTAS_anchor  = '<a ' . $site_email_VENTAS_href . '>' . $site_email_VENTAS_address . '</a>';

$site_email_INFO         = 'info';
$site_email_INFO_address = $site_email_INFO . '@' . $domain_main;
$site_email_INFO_mailto  = 'mailto:' . $site_email_INFO_address;
$site_email_INFO_href    = 'href="' . $site_email_INFO_mailto . '"';
$site_email_INFO_anchor  = '<a ' . $site_email_INFO_href . '>' . $site_email_INFO_address . '</a>';

$site_email_EMAILA           = 'EMAILA';
$site_email_EMAILA_address   = $site_email_EMAILA . '@' . $domain_main;
$site_email_EMAILA_mailto    = 'mailto:' . $site_email_EMAILA_address;
$site_email_EMAILA_href      = 'href="' . $site_email_EMAILA_mailto . '"';
$site_email_EMAILA_anchor    = '<a ' . $site_email_EMAILA_href . '>' . $site_email_EMAILA_address . '</a>';

$site_email_EMAILB           = 'EMAILB';
$site_email_EMAILB_address   = $site_email_EMAILB . '@' . $domain_main;
$site_email_EMAILB_mailto    = 'mailto:' . $site_email_EMAILB_address;
$site_email_EMAILB_href      = 'href="' . $site_email_EMAILB_mailto . '"';
$site_email_EMAILB_anchor    = '<a ' . $site_email_EMAILB_href . '>' . $site_email_EMAILB_address . '</a>';

/* // Domain secondary ------------------------------------------------------ */
$site_email_EMAILC           = 'EMAILC';
$site_email_EMAILC_address   = $site_email_EMAILC . '@' . $domain_sec;
$site_email_EMAILC_mailto    = 'mailto:' . $site_email_EMAILC_address;
$site_email_EMAILC_href      = 'href="' . $site_email_EMAILC_mailto . '"';
$site_email_EMAILC_anchor    = '<a ' . $site_email_EMAILC_href . '>' . $site_email_EMAILC_address . '</a>';

$site_email_EMAILD           = 'EMAILD';
$site_email_EMAILD_address   = $site_email_EMAILD . '@' . $domain_sec;
$site_email_EMAILD_mailto    = 'mailto:' . $site_email_EMAILD_address;
$site_email_EMAILD_href      = 'href="' . $site_email_EMAILD_mailto . '"';
$site_email_EMAILD_anchor    = '<a ' . $site_email_EMAILD_href . '>' . $site_email_EMAILD_address . '</a>';

/* // Domain gmail.com ------------------------------------------------------ */
$site_email_GMAILACCOUNT_gmail_address   = 'GMAILACCOUNT@gmail.com';
$site_email_GMAILACCOUNT_gmail_mailto    = 'mailto:' . $site_email_GMAILACCOUNT_gmail_address;
$site_email_GMAILACCOUNT_gmail_href      = 'href="' . $site_email_GMAILACCOUNT_gmail_mailto . '"';
$site_email_GMAILACCOUNT_gmail_anchor    = '<a ' . $site_email_GMAILACCOUNT_gmail_href . '>' . $site_email_GMAILACCOUNT_gmail_address . '</a>';

/* // Domain hotmail.com ---------------------------------------------------- */
$site_email_HOTMAILACCOUNT_hotmail_address   = 'HOTMAILACCOUNT@hotmail.com';
$site_email_HOTMAILACCOUNT_hotmail_mailto    = 'mailto:'. $site_email_HOTMAILACCOUNT_hotmail_address;
$site_email_HOTMAILACCOUNT_hotmail_href      = 'href="'. $site_email_HOTMAILACCOUNT_hotmail_mailto .'"';
$site_email_HOTMAILACCOUNT_hotmail_anchor    = '<a '. $site_email_HOTMAILACCOUNT_hotmail_href .'>'. $site_email_HOTMAILACCOUNT_hotmail_address .'</a>';
?>