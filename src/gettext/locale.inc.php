<?php
/* * SimbelShop * ==============================================================
   Locale Variables [/src/gettext/locale.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [14]
// REF [14a]
// Definición de directorios locale.
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



switch ($_GET["gettext_idioma"]) {
    case 1:
        $gettext_idioma = 'es_AR';
        break;

    case 2:
        $gettext_idioma = 'en_GB';
        break;

    case 3:
        $gettext_idioma = 'it_IT';
        break;

    case 4:
        $gettext_idioma = 'de_DE';
        break;

    case 5:
        $gettext_idioma = 'fr_FR';
        break;

    case 6:
        $gettext_idioma = 'pt_BR';
        break;
}
    
/* // Define el idioma ------------------------------------------------------ */
putenv("LANGUAGE=$gettext_idioma");
putenv("LANG=$gettext_idioma");
putenv("LC_ALL=$gettext_idioma");
putenv("LC_LANG=$gettext_idioma");
putenv("LC_LANGUAGE=$gettext_idioma");
setlocale(LC_ALL, $gettext_idioma);
    
/* // Define la ubicación de los ficheros de traducción --------------------- */
$locale_filename = "messages";
$locale_dir = "./locale";
bindtextdomain($locale_filename, $locale_dir);
bind_textdomain_codeset($locale_filename, "UTF-8");
textdomain($locale_filename);

?>