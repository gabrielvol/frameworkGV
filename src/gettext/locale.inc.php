<?php
/* * NombreDeProyecto * ========================================================
   Locale Variables [/src/gettext/locale.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
// REF [14] Gettext Locales
// REF [14a] Idioma Chino ZH, MingLiu font
 
Definición de directorios locale.

#php #gettext #locale
*/



$gettext_lang = 'es_AR';

if (isset($_GET['gettext_idioma'])) {
    switch ($_GET["gettext_idioma"]) {
        case 1:
            $gettext_lang = 'es_AR';
            break;

        case 2:
            $gettext_lang = 'en_GB';
            break;

        case 3:
            $gettext_lang = 'it_IT';
            break;

        case 4:
            $gettext_lang = 'de_DE';
            break;

        case 5:
            $gettext_lang = 'fr_FR';
            break;

        case 6:
            $gettext_lang = 'pt_BR';
            break;
    }
}
    
/* // Define el idioma ------------------------------------------------------ */
putenv("LANGUAGE=$gettext_lang");
putenv("LANG=$gettext_lang");
putenv("LC_ALL=$gettext_lang");
putenv("LC_LANG=$gettext_lang");
putenv("LC_LANGUAGE=$gettext_lang");
setlocale(LC_ALL, $gettext_lang);
    
/* // Define la ubicación de los ficheros de traducción --------------------- */
$locale_filename = "messages";
$locale_dir = "./locale";
bindtextdomain($locale_filename, $locale_dir);
bind_textdomain_codeset($locale_filename, "UTF-8");
textdomain($locale_filename);

?>