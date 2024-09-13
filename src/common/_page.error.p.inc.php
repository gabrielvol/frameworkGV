<p><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a <?php echo $href_root; ?> ><?php echo _("p&aacute;gina inicial del sitio"); ?></a>, <?php echo _("o a nuestra"); ?> <a <?php echo $href_contacto; ?>><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>

<p><?php if(!empty($gettext_idioma)){ if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        You can continue browsing this site by going to the
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'Puede continuar navegando el sitio yendo a la'; } ?>
     <a <?php echo $href_root; ?> class="black"><?php if(!empty($gettext_idioma)){ if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        main menu
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'p&aacute;gina inicial del sitio'; } ?></a>, <?php if(isset($gettext_idioma)){ if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        or to our
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'o a nuestra'; } ?> <a <?php echo $href_contacto; ?> class="black"><?php if(!empty($gettext_idioma)){ if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        contact page
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'p&aacute;gina de contacto'; } ?></a>.</p>