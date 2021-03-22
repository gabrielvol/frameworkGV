<!-- gettext file -->
<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="<?php if($page_index == 0){ echo ' header_index'; } ?>">
    <a href="<?php echo $site_tel_PRINCIPAL_whatsapp_chatOpen ?>" class="button_whatsapp">Abrir un chat.</a>
    
    <!--Normal-->
    <?php
        if($page_index == 1){ echo '<h1 class="logo_header">'; }
        if($page_index == 1 && $logo_bgImage_before == 1) { echo '<div class="logo_before">'; }
    ?>
    <a href="<?php echo $url_dir; ?>/" class="<?php if($page_int == 1){ echo 'logo_header'; } ?>">   
        <?php if($page_int == 1 && $logo_bgImage_before == 1) { echo '<div class="logo_before">'; } ?>
            <img src="<?php echo $url_dir; ?>/img/logo_header.svg" alt="<?php echo $site_name_full ?>." />   
        <?php if($page_int == 1 && $logo_bgImage_before == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($page_index == 1){ echo '</h1>'; }
        if($page_index == 1 && $logo_bgImage_before == 1) { echo '</div>'; }
    ?>    
    
    <!--Con Gettext-->
    <?php
        if($page_index == 1){ echo '<h1 class="logo_header">'; } 
        if($page_index == 1 &&  $logo_bgImage_before == 1) { echo '<div class="logo_before">'; }
    ?>
    <a href="<?php echo $url_dir; ?>/<?php if($gettext_idioma == 'pt_BR'){ echo '?l=pt_BR';
        } else if($gettext_idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>" class="<?php if($page_int == 1){ echo 'logo_header'; } ?>">
        <?php if($page_int == 1 && $logo_bgImage_before == 1) { echo '<div class="logo_before">'; } ?>
            <img src="<?php echo $url_dir; ?>/img/logo_header.svg" alt="<?php echo $site_name_full ?>." />
        <?php if($page_int == 1 && $logo_bgImage_before == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($page_index == 1){ echo '</h1>'; }
        if($page_index == 1 && $logo_bgImage_before == 1) { echo '</div>'; }
    ?>  
    
    <?php include('nav.main.inc.php'); ?>
</header>
