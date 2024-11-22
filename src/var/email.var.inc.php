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
$site_email_gmail_GMAILACCOUNT_address   = 'GMAILACCOUNT@gmail.com';
$site_email_gmail_GMAILACCOUNT_mailto    = 'mailto:' . $site_email_gmail_GMAILACCOUNT_address;
$site_email_gmail_GMAILACCOUNT_href      = 'href="' . $site_email_gmail_GMAILACCOUNT_mailto . '"';
$site_email_gmail_GMAILACCOUNT_anchor    = '<a ' . $site_email_gmail_GMAILACCOUNT_href . '>' . $site_email_gmail_GMAILACCOUNT_address . '</a>';
?>