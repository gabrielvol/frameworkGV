<p lang="<?php echo $site_lang_HTML_attr; ?>"><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a <?php echo $href_root; ?> ><?php echo _("p&aacute;gina inicial del sitio"); ?></a>, <?php echo _("o a nuestra"); ?> <a <?php echo $href_contacto; ?>><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>

<p lang="<?php echo $site_lang_HTML_attr; ?>"><?php if(!empty($gettext_lang)){ if($gettext_lang == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_lang == 'en_GB'): ?>
        You can continue browsing this site by going to the
    <?php elseif($gettext_lang == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'Puede continuar navegando el sitio yendo a la'; } ?>
     <a <?php echo $href_root; ?> class="black"><?php if(!empty($gettext_lang)){ if($gettext_lang == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_lang == 'en_GB'): ?>
        main menu
    <?php elseif($gettext_lang == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'p&aacute;gina inicial del sitio'; } ?></a>, <?php if(isset($gettext_lang)){ if($gettext_lang == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_lang == 'en_GB'): ?>
        or to our
    <?php elseif($gettext_lang == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'o a nuestra'; } ?> <a <?php echo $href_contacto; ?> class="black"><?php if(!empty($gettext_lang)){ if($gettext_lang == 'de_DE'): ?>
        SinTraduccion
    <?php elseif($gettext_lang == 'en_GB'): ?>
        contact page
    <?php elseif($gettext_lang == 'pt_BR'): ?>
        SinTraduccion
    <?php endif; ?>
<?php } else { echo 'p&aacute;gina de contacto'; } ?></a>.</p>