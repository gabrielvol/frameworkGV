<?php
/* * NombreDeProyecto * ========================================================
   Social [/src/common/social.inc.php]
   ========================================================================== */
?>



<ul class="social unstyled displayFlex">
    <li class="social_em">
        <a <?php echo $site_email_CONTACTO_href; ?> class="hover_grow_L_ani" target="_blank">
            <?php echo _("Cont&aacute;ctenos por Correo Electr&oacute;nico"); ?>.
            <span class="visuallyHidden"><?php echo _("Correo Electr&oacute;nico"); ?>:</span>
            <img src="<?php echo $dir_env; ?>/img/social_em.svg" alt="<?php echo _('Cont&aacute;ctenos por Correo Electr&oacute;nico'); ?>.">
        </a>
    </li>
    <li class="social_em">
            <span class="visuallyHidden"><?php echo _("Correo Electr&oacute;nico"); ?>:</span>
        <a <?php echo $site_email_CONTACTO_href; ?>><?php echo $site_email_CONTACTO_address; ?></a>
    </li>
    <li class="social_fb">
        <a href="<?php echo $social_facebook_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Seguinos en Facebook"); ?>.
            <span class="visuallyHidden">Facebook:</span>
            <img src="<?php echo $dir_env; ?>/img/social_fb.svg" alt="<?php if($gettext_idioma == 'pt_BR') { echo 'Ir para o nosso perfil no Facebook'; } elseif($gettext_idioma == 'en_GB') { echo 'Go to our Facebook profile'; } else { echo 'Ir a nuestro perfil en Facebook'; } ?>.">
        </a>
    </li>
    <li class="social_ig">
        <a href="<?php echo $social_instagram_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Seguinos en Instagram"); ?>.
            <span class="visuallyHidden">Instagram:</span>
            <img src="<?php echo $dir_env; ?>/img/social_ig.svg" alt="<?php if($gettext_idioma == 'pt_BR') { echo 'Ir para o nosso perfil no Instagram'; } elseif($gettext_idioma == 'en_GB') { echo 'Go to our Instagram profile'; } else { echo 'Ir a nuestro perfil en Instagram'; } ?>.">
        </a>
    </li>    
    <li class="social_li">
        <a href="<?php echo $social_linkedin_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Mir&aacute; nuestro perfil en LinkedIn"); ?>.
            <span class="visuallyHidden">LinkedIn:</span>
            <img src="<?php echo $dir_env; ?>/img/social_li.svg" alt="<?php echo _('Ir a nuestro perfil en LinkedIn'); ?>.">
        </a>
    </li>
    <li class="social_pi">
        <a href="<?php echo $social_pinterest_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Seguinos en Pinterest"); ?>.
            <span class="visuallyHidden">Pinterest:</span>
            <img src="<?php echo $dir_env; ?>/img/social_pi.svg" alt="<?php echo _('Ir a nuestro perfil en Pinterest'); ?>.">
        </a>
    </li>
    <li class="social_sk">
        <a href="<?php echo $social_skype_user; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Contactanos en Skype"); ?>.
            <span class="visuallyHidden">Skype:</span>
            <img src="<?php echo $dir_env; ?>/img/social_sk.svg" alt="<?php echo _('Comunicate con nosotros por Skype'); ?>.">
        </a>
    </li>
    <li class="social_sc">
        <a href="<?php echo $social_snapchat_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Nuestro perfil en Snapchat"); ?>.
            <span class="visuallyHidden">Snapchat:</span>
            <img src="<?php echo $dir_env; ?>/img/social_sc.svg" alt="<?php echo _('Ir a nuestro perfil en Snapchat'); ?>.">
        </a>
    </li>
    <li class="social_sp">
        <a href="<?php echo $social_spotify_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Escuchanos en Spotify"); ?>.
            <span class="visuallyHidden">Spotify:</span>
            <img src="<?php echo $dir_env; ?>/img/social_sp.svg" alt="<?php echo _('Ir a nuestro perfil en Spotify'); ?>.">
        </a>
    </li>
    <li class="social_x">
        <a href="<?php echo $social_x_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Seguinos en X"); ?>.
            <span class="visuallyHidden">X:</span>
            <img src="<?php echo $dir_env; ?>/img/social_x.svg" alt="<?php echo _('Ir a nuestro perfil en X'); ?>.">
        </a>
    </li>
    <li class="social_vi">
        <a href="<?php echo $social_vimeo_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Mir&aacute; Nuestro Canal en Vimeo"); ?>.
            <span class="visuallyHidden">Vimeo:</span>
            <img src="<?php echo $dir_env; ?>/img/social_vi.svg" alt="<?php echo _('Ir a nuestro canal de Vimeo'); ?>.">
        </a>
    </li>
    <li class="social_wa">
        <?php include('button.whatsApp.inc.php'); ?>
    </li>
    <li class="social_yt">
        <a href="<?php echo $social_youTube_url; ?>" class="hover_grow_L_ani" target="_blank">
            <?php echo _("Mir&aacute; Nuestro Canal en YouTube"); ?>.
            <span class="visuallyHidden">YouTube:</span>
            <img src="<?php echo $dir_env; ?>/img/social_yt.svg" alt="<?php echo _('Ir a nuestro canal de YouTube'); ?>.">
        </a>
    </li>
    <li class="social_tk">
        <a href="<?php echo $social_tikTok_url; ?>" class="hover_grow_L_ani" target="_blank">
            Tik Tok.
            <span class="visuallyHidden">Tik Tok:</span>
            <img src="<?php echo $dir_env; ?>/img/social_tk.svg" alt="Tik Tok.">
        </a>
    </li>
</ul>