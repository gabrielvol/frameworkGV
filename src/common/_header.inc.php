<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" <?php echo $header_classes; ?>>
    <a href="<?php echo $site_tel_PRINCIPAL_whatsapp_chatOpen; ?>" class="button_whatsapp">Abrir un chat.</a>
    
    <?php
        if($page_index == 1){ echo '<h1 class="logo_header">'; } 
        if($page_index == 1 && $logo_bgImage_before_act == 1) { echo '<div class="logo_before">'; }
    ?>
    <a <?php echo $href_logo; ?> class="<?php if($page_int == 1){ echo 'logo_header'; } ?>">
        <?php if($page_int == 1 && $logo_bgImage_before_act == 1) { echo '<div class="logo_before">'; } ?>
            <img src="<?php echo $url_entorno; ?>/img/logo_header.svg" alt="<?php echo $site_name_full ?>." />
        <?php if($page_int == 1 && $logo_bgImage_before_act == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($page_index == 1){ echo '</h1>'; }
        if($page_index == 1 && $logo_bgImage_before_act == 1) { echo '</div>'; }
    ?>  
    
    <?php include('nav.main.inc.php'); ?>
        
    <?php
        if($url_entorno == "/test"){
            include('nav.language.inc.php');
        }
    ?>
</header>
