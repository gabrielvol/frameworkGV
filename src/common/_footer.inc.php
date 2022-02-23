<footer id="footer" <?php echo $classes_footer; ?>>
    <?php include('button.siteTop.inc.php'); ?>
        
    <img src="<?php echo $dir_env; ?>/img/logo_footer.svg" class="logo_footer" alt="<?php echo $site_name_full; ?>." />
    
    <div class="logo_footer_container"> <?php /* // REF [20] */ ?>
        <img src="<?php echo $dir_env; ?>/img/logo_footer.svg" class="logo_footer" alt="<?php echo $site_name_full; ?>." />
    </div>
    <div class="footer_txt"> <?php /* // REF [20] */ ?>
        <p class="footer_address"><?php echo _("Direcci&oacute;n"); ?>: <a href="<?php echo $site_address_ADDRESSA_map_url; ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $site_address_ADDRESSA_PT; } else if($gettext_idioma == 'en_GB') { echo $site_address_ADDRESSA_GB; } else { echo $site_address_ADDRESSA; } ?></a></p>
        <p class="footer_tel"><?php echo _("Tel&eacute;fono"); ?>: <a <?php echo $site_tel_PHONEA_call_href; ?>> <?php echo $site_tel_PHONEA_formatted ?></a></p>
        <p class="footer_mail"><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $site_email_EMAILA_href; ?>> <?php echo $site_email_EMAILA_address ?></a></p>
    </div>  
    
    <nav class="nav_footer" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="nav_main_ul unstyled clearfix">
            <?php include('nav.main.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="footer_address">
        <a href="<?php echo $site_address_ADDRESSA_map_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $site_address_ADDRESSA_PT; } else if($gettext_idioma == 'en_GB') { echo $site_address_ADDRESSA_GB; } else { echo $site_address_ADDRESSA; } ?></a>
    </p>
    
    <p><?php echo _("Tel&eacute;fono"); ?>: <a <?php echo $site_tel_PHONEA_call_href; ?>> <?php echo $site_tel_PHONEA_formatted ?></a></p>
    
    <p><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $site_email_EMAILA_href; ?>><?php echo $site_email_EMAILA_address ?></a></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_actual ." - ". $site_name_full; ?></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_from . (($date_year_from != $date_year_actual) ? " - ". $date_year_actual : "") .' '. $site_name_full; ?></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_from . (($date_year_from != $date_year_actual) ? " - ". $date_year_actual : ""); ?> <span class="dash">&mdash;</span> <span class="copy_footer copy_footer_span"><?php echo $site_name_tag; ?> · Ciudad, Provincia.</span></p>
    
    <div class="legal_footer">
        <ul class="horizontal clearfix containerAT">
            <li class="legal_copy">&copy; Copyright <?php echo $date_year_actual ." - ". $site_name_full; ?></li>
            <li class="legal_tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
            <li class="legal_studio"><?php echo _("Web Design By"); ?><a href="https://www.instagram.com/xxxxxx/" class="displayBlock alignCenterBT">Estudio De Diseño</a></li>
        </ul>
    </div> 
</footer>
<?php
    include('footer.pop.inc.php');
    include('footer.js.inc.php');
?>