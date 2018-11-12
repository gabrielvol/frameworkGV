<?php
    switch ($_GET["idioma"]) {
        case 1:
            $idioma = 'es_AR';
            break;
        case 2:
            $idioma = 'it_IT';
            break;
        case 3:
            $idioma = 'en_GB';
            break;
    }
    // Define el idioma
    putenv("LANGUAGE=$idioma");
    putenv("LANG=$idioma");
    putenv("LC_ALL=$idioma");
    putenv("LC_LANG=$idioma");
    putenv("LC_LANGUAGE=$idioma");
    setlocale(LC_ALL, $idioma);

    // Define la ubicación de los ficheros de traducción
    $locale_filename = "messages";
    $locale_dir = "./locale";
    bindtextdomain($locale_filename, $locale_dir);
    bind_textdomain_codeset($locale_filename, "UTF-8");
    textdomain($locale_filename);
?>