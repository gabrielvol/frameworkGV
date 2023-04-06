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
// mq, MQ               = media query @media
// tx                   = texto

///-- Fin del nombre
// _before              = se usa con pseudo-elementos ::before
// _after               = se usa con pseudo-elementos ::after
// _act                 = activacion
// _ani                 = animacion
// _hover               = se usa con pseudo-clases :focus y :hover
// _hs                  = hash
// _imp			= importacion
// _mx                  = mixin

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
$var_file_titulo_pre             = "Proyecto-";
$var_file_titulo_sec_SECTION     = "Seccion-";

//Sin variables de proyecto o sección
//$file_titulo___pdf_01    = 'titulodelarchivo';
//$file_href_____pdf_01    = 'href="' . $dir_env . '/files/' . $file_titulo___pdf_01 . '"';
//$file_download_pdf_01    = 'download="' . $file_titulo___pdf_01 . '"';    
//$file__________pdf_01    = $file_href_____pdf_01 . ' ' . $file_download_pdf_01;
    
//ConPRE _ SinSECTION
//$file_titulo___pdf_01    = $var_file_titulo_pre . 'titulodelarchivo';
//$file_href_____pdf_01    = 'href="' . $dir_env . '/files/' . $file_titulo___pdf_01 . '"';
//$file_download_pdf_01    = 'download="' . $file_titulo___pdf_01 . '"';     
//$file__________pdf_01    = $file_href_____pdf_02 . ' ' . $file_download_pdf_01;

//ConPRE _ ConSECTION
//$file_titulo___pdf_01    = $var_file_titulo_pre . $var_file_titulo_sec_SECTION . 'titulodelarchivo';
//$file_href_____pdf_01    = 'href="' . $dir_env . '/files/' . $file_titulo___pdf_01 . '"';
//$file_download_pdf_01    = 'download="' . $file_titulo___pdf_01 . '"';     
//$file__________pdf_01    = $file_href_____pdf_01 . ' ' . $file_download_pdf_01;

?>