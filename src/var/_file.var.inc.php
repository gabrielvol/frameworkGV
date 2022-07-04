<?php
/* * NombreDeProyecto * ========================================================
   Files Variables [/src/var/file.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq                   = media query @media
// tx                   = texto

///-- Fin del nombre
// _mx                  = mixin
// _act                 = activacion
// _ani                 = animacion
// _hs                  = hash
// _hover               = se usa con pseudoclases :focus y :hover
// _before              = se usa con pseudoelementos ::before
// _after               = se usa con pseudoelementos ::after

///-- Espaciado
// P, M                 = padding, margin
// T, R, B, L           = top, right, bottom, left
// H, V, A, X           = horizontal, vertical, all, custom defined

///-- Tamanos de Pantalla
// M, T, D, DL          = mobile, tablet, desktop, desktop large
// B, A, O, L           = before, after, only, landscape

///-- Colores
// X, L, D              = extra, light, dark
// De, S, B             = desaturated, semi, bright

///-- Fuentes
// T, L, M, R, B, BK    = thin, light, medium, regular, bold, black
// X, S, U, C, I        = extra, semi, ultra, condensed, italic



/* // Download anchor attributes -------------------------------------------- */
$var_file_titulo_principal      = "Proyecto-";
$var_file_seccion_SECTION       = "Seccion-";

// Sin variables de proyecto o sección
// $file_titulo___pdf_01    = 'titulodelarchivo';
// $file_href_____pdf_01    = 'href="'. $dir_env .'/files/'. $file_titulo___pdf_01 .'"';
// $file_download_pdf_01    = 'download="'. $file_titulo___pdf_01 .'"';    
// $file__________pdf_01    = $file_href_____pdf_01 .' '. $file_download_pdf_01;

// ConSECTION
// $file_href_____pdf_01    = 'href="'. $dir_env .'/files/archivopdf01.pdf"';
// $file_download_pdf_01    = 'download="'. $var_file_titulo_principal . $var_file_seccion_SECTION .'titulo.pdf"';    
// $file__________pdf_01    = $file_href_____pdf_01 .' '. $file_download_pdf_01;
    
// SinSECTION
// $file_href_____pdf_02    = 'href="'. $dir_env .'/files/archivopdf02.pdf"';
// $file_download_pdf_02    = 'download="'. $var_file_titulo_principal . 'titulo.pdf"';    
// $file__________pdf_02    = $file_href_____pdf_02 .' '. $file_download_pdf_02;

?>