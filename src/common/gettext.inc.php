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
    putenv("LANG=$idioma");
    setlocale(LC_ALL, $idioma);

    // Define la ubicación de los ficheros de traducción
    bindtextdomain("messages", "locale");
    textdomain("messages");