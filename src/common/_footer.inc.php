<footer id="footer" class="">        
    <a href="#site_top" class="button_siteTop pAbs indentedText" role="button" aria-pressed="false"><?php echo _("Subir al inicio"); ?></a>  
        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    
    <div class="logoFooter borderBox">
        <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    </div>
    <div class="txtFooter borderBox">
        <p class="gooAddress">
            <a href="<?php echo $social_googleMap_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_full_PT; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_full_GB; } else { echo $company_address_main_full; } ?></a>
        </p>
        <p><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
        <p><?php echo _("Correo electr&oacute;nico"); ?>: <a href="<?php echo $social_mailto_address_A ?>"><?php echo $social_email_address_A ?></a></p>
    </div>  
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="gooAddress">
        <a href="<?php echo $social_googleMap_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_full_PT; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_full_GB; } else { echo $company_address_main_full; } ?></a>
    </p>
    
    <p><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
    
    <p><?php echo _("Correo electr&oacute;nico"); ?>: <a href="<?php echo $social_mailto_address_A ?>"><?php echo $social_email_address_A ?></a></p>
    
    <p class="footerCopy">&copy; <?php echo $dateThisYear." - ".$company_name_full ?></p>
    
    <p class="footerCopy">
        &copy;
        <?php
            $fromYear = 2010;
            echo $fromYear . (($fromYear != $dateThisYear) ? " - " . $dateThisYear : "") . $company_name_full; 
        ?>
    </p>
    
    <div class="footerLegal">
        <ul class="horizontal clearfix containerAT">
            <li class="copy">&copy; <?php echo $dateThisYear." - ".$company_name_full ?></li>
            <li class="tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
            <li class="stu"><?php echo _("Web Design By"); ?><a href="https://www.instagram.com/xxxxxx/" class="displayBlock alignCenterBT">Estudio De Diseño</a></li>
        </ul>
    </div> 
</footer>
    
<?php include('pop.inc.php'); ?>

<?php include('footer.js.inc.php'); ?>