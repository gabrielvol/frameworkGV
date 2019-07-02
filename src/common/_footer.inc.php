<footer id="footer" class="">        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    
    <div class="logo_footerFloatedCont borderBox">
        <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    </div>
    <div class="txt_footerFloatedCont borderBox">
        <p class="gooAddress">
            <a href="<?php echo $social_googleMap_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_pt; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_en; } else { echo $company_address_main; } ?></a>
        </p>
        <p><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
        <p><?php echo _("Correo eletr&oacute;nico"); ?>: <a href="<?php echo $social_mailto_addressMain ?>"><?php echo $social_email_addressMain ?></a></p>
    </div>  
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="gooAddress">
        <a href="<?php echo $social_googleMap_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_pt; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_en; } else { echo $company_address_main; } ?></a>
    </p>
    
    <p><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
    
    <p><?php echo _("Correo eletr&oacute;nico"); ?>: <a href="<?php echo $social_mailto_addressMain ?>"><?php echo $social_email_addressMain ?></a></p>
    
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
        </ul>
    </div> 
</footer>
    
<?php include('pop.inc.php'); ?>

<?php include('footer.js.inc.php'); ?>