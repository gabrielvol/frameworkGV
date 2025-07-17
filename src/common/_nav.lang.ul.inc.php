<?php
/* * NombreDeProyecto * ========================================================
   Nav Language UL [/src/var/nav.lang.ul.inc.php]
   ========================================================================== */

// Nav para cambiar idioma del sitio

?>

<ul class="nav_lang_ul unstyled displayFlex <?php if(isset($gettext_idioma)){ if($gettext_idioma == 'de_DE') {
        // REF [33]
        echo ' lang_DE'; }

    elseif($gettext_idioma == 'en_GB') {
        echo ' lang_GB'; }

    elseif($gettext_idioma == 'pt_BR') {
        echo ' lang_BR'; }

    else { echo ' lang_AR'; } } ?>">

    <?php include('nav.lang.list.inc.php'); ?>
</ul>