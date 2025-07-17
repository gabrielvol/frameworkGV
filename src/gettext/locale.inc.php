<?php
/* * NombreDeProyecto * ========================================================
   Locale Variables [/src/gettext/locale.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [14] Gettext Locales
// REF [14a] Idioma Chino ZH, MingLiu font
// 
// Definición de directorios locale.
//
// #php #gettext #locale



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