<p><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a <?php echo $href_root; ?> ><?php echo _("p&aacute;gina inicial del sitio"); ?></a>, <?php echo _("o a nuestra"); ?> <a <?php echo $href_contacto; ?>><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>

<p><?php if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        You can continue browsing this site by going to the
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php else: ?>
        Puede continuar navegando el sitio yendo a la
    <?php endif; ?> <a <?php echo $href_root; ?> class="black"><?php if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        main menu
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php else: ?>
        p&aacute;gina inicial del sitio
    <?php endif; ?></a>, <?php if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        or to our
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php else: ?>
        o a nuestra
    <?php endif; ?> <a <?php echo $href_contacto; ?> class="black"><?php if($gettext_idioma == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_idioma == 'en_GB'): ?>
        contact page
    <?php elseif($gettext_idioma == 'pt_BR'): ?>
        SinTraduccion
    <?php else: ?>
        p&aacute;gina de contacto
    <?php endif; ?></a>.</p>