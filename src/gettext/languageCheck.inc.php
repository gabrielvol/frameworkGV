<?php
/* * NombreDeProyecto * ========================================================
   Language Check Variables [/src/gettext/languageCheck.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [14]
// REF [14a]
// Variable $l y asignación de idioma
//
// La variable $l se define en el archivo `[/src/var/lang.var.inc.php]`
// 
// #php #gettext


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



$l = $_GET['l'];  

if($l == 'pt') {
    $gettext_idioma     = 'pt_BR';
    $gettext_idioma_url = '?l=pt';
    
} elseif($l == 'en'){
    $gettext_idioma     = 'en_GB';
//    $gettext_idioma     = 'en_US';
    $gettext_idioma_url = '?l=en';
    
} elseif($l == 'de') {
    $gettext_idioma     = 'de_DE';
    $gettext_idioma_url = '?l=de';

} elseif($l == 'fr') {
    $gettext_idioma     = 'fr_FR';
    $gettext_idioma_url = '?l=fr';

} elseif($l == 'it') {
    $gettext_idioma     = 'it_IT';
    $gettext_idioma_url = '?l=it';

} else {
    $gettext_idioma     = 'es_AR';
//    $gettext_idioma     = 'es_ES';
//    $gettext_idioma     = 'es_UY';
    $gettext_idioma_url = '?l=es';
}

/*
if(isset($l)) {
    $gettext_idiomaElegido = $_GET['l'];        
} else {
    $gettext_idiomaElegido = 'es_AR';
}        
$gettext_idioma     = $gettext_idiomaElegido;
$gettext_idioma_url = '?l='. $gettext_idiomaElegido;
*/

?>