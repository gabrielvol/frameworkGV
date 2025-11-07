<?php /* // REF [13] [/src/var/date.var.inc.php] */ ?>

<footer id="footer" <?php echo $classes_footer; ?>>
    <?php include('button.siteTop.inc.php'); ?>
        
    <img src="<?php echo $dir_env; ?>/img/logo_footer.svg" class="logo_footer" alt="<?php echo $site_name_full; ?>." />
    
    <div class="logo_footer_container"> <?php /* // REF [20] [/etc/css/custom/act/footer_act.scss] */ ?>
        <img src="<?php echo $dir_env; ?>/img/logo_footer.svg" class="logo_footer" alt="<?php echo $site_name_full; ?>." />
    </div>
    <div class="footer_txt"> <?php /* // REF [20] */ ?>
        <p class="footer_address"><?php echo _("Direcci&oacute;n"); ?>: <a href="<?php echo $site_address_ADDRESSA_map_url; ?>" target="_blank"><?php echo $site_address_ADDRESSA; ?></a></p>
        <p class="footer_tel"><?php echo _("Tel&eacute;fono"); ?>: <a <?php echo $site_tel_XXXX_call_href; ?>><?php echo $site_tel_XXXX_formatted; ?></a></p>
        <p class="footer_mail"><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $site_email_CONTACTO_href; ?>><?php echo $site_email_CONTACTO_address; ?></a></p>
    </div>  
    
    <nav class="nav_footer" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="nav_main_ul unstyled clearfix">
            <?php include('nav.main.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="footer_address">
        <a href="<?php echo $site_address_ADDRESSA_map_url ?>" target="_blank"><?php echo $site_address_ADDRESSA; ?></a>
    </p>
    
    <p><?php echo _("Tel&eacute;fono"); ?>: <a <?php echo $site_tel_XXXX_call_href; ?>><?php echo $site_tel_XXXX_formatted; ?></a></p>
    
    <p><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $site_email_CONTACTO_href; ?>><?php echo $site_email_CONTACTO_address; ?></a></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_actual ." - ". $site_name_full; ?></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_from . (($date_year_from != $date_year_actual) ? " - ". $date_year_actual : "") .' '. $site_name_full; ?></p>
    
    <p class="copy_footer">&copy; Copyright <?php echo $date_year_from . (($date_year_from != $date_year_actual) ? " - ". $date_year_actual : ""); ?> <span class="dash">&mdash;</span> <span class="copy_footer copy_footer_span"><?php echo $site_name_tag; ?> · Ciudad, Provincia.</span></p>
    
    <div class="legal_footer">
        <ul class="horizontal clearfix containerAT">
            <li class="legal_copy">&copy; Copyright <?php echo $date_year_actual ." - ". $site_name_full; ?></li>
            <li class="legal_tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
            <li class="legal_studio"><?php echo _("Web Design By"); ?><a href="https://www.instagram.com/xxxxxx/" class="displayBlock txAlignCenterBT">Estudio De Diseño</a></li>
        </ul>
    </div> 
</footer>
<?php
if(!$page_subdomain){ /* // REF [54] */
    include('footer.pop.inc.php');
    include('footer.js.inc.php');
    
    /* // REF [47] Topbar.js */    
    $browser_userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

    $browser_keywords_mobile = [
        'Android', 'BlackBerry', 'iPad', 'iPhone', 'iPod', 
        'Mobile', 'webOS', 'Tablet'
    ];

    $browser_isMobile = false;
    
    foreach ($browser_keywords_mobile as $keyword_browserForEach) {
        if (stripos($browser_userAgent, $keyword_browserForEach) !== false) {
            $browser_isMobile = true;
            break;
        }
    }
    
    if($topbar_hide_mobile){
        if ($browser_isMobile) {
            echo '<div class="pretopbar"></div>';
        }
    }
}
?>