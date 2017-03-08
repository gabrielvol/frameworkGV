<?php
# Gettext

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

/*

# href
href="/link.php<?php if($idioma == 'it_IT'){ echo '?l=it_IT'; } else if($idioma == 'en_GB'){ echo '?l=en_GB'; } else { echo '?l=es_AR'; } ?>#anchorID"

# src
src="/img/<?php if($idioma == 'it_IT'){ echo '/it/'; } else if($idioma == 'en_GB'){ echo '/en/'; } else { echo '/'; } ?>img_file.jpg"

# class
class="<?php if($idioma == 'it_IT'){ echo ' ITlang'; } else if($idioma == 'en_GB'){ echo ' ENlang'; } ?>"

href="?l=it_IT"

href="?l=en_GB"

href="?l=es_AR"

&.BRlang{}
&.ENlang{}
&.ITlang{}
&.ARlang{}

*/