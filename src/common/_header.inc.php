<!-- gettext file -->
<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="borderBox">
    
    <!--Normal-->
    <?php
        if($page_index == 1){ echo '<h1 class="logoH">'; }
        if($page_index == 1 && $logo_bgImg_before == 1) { echo '<div class="logoBefore">'; }
    ?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($page_int == 1){ echo 'logoH'; } ?>">   
        <?php if($page_int == 1 && $logo_bgImg_before == 1) { echo '<div class="logoBefore">'; } ?>
            <img src="/nuevo/img/logo.svg" alt="<?php echo $company_name_full ?>."  class="displayBlock">   
        <?php if($page_int == 1 && $logo_bgImg_before == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($page_index == 1){ echo '</h1>'; }
        if($page_index == 1 && $logo_bgImg_before == 1) { echo '</div>'; }
    ?>    
    
    <!--Con Gettext-->
    <?php
        if($page_index == 1){ echo '<h1 class="logoH">'; } 
        if($page_index == 1 &&  $logo_bgImg_before == 1) { echo '<div class="logoBefore">'; }
    ?>
    <a href="/nuevo/<?php if($gettext_idioma == 'pt_BR'){ echo '?l=pt';
        } else if($gettext_idioma == 'en_GB') {
            echo '?l=en';
        } else {
            echo '?l=es';
        } ?>" class="pRel displayBlock <?php if($page_int == 1){ echo 'logoH'; } ?>">
        <?php if($page_int == 1 && $logo_bgImg_before == 1) { echo '<div class="logoBefore">'; } ?>
            <img src="/nuevo/img/logo.svg" alt="<?php echo $company_name_full ?>." class="displayBlock">
        <?php if($page_int == 1 && $logo_bgImg_before == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($page_index == 1){ echo '</h1>'; }
        if($page_index == 1 && $logo_bgImg_before == 1) { echo '</div>'; }
    ?>  
    
    <?php include('nav.inc.php'); ?>
</header>
