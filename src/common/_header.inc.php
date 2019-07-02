<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="borderBox">
    
    <!--Normal-->
    <?php if($page_index == 1){ echo '<h1 class="logoH">'; } else if($logoImgBgBefore == 1) { echo '<div class="logoBefore">'; }?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($page_int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo $company_name_full ?>."  class="displayBlock">
    </a>
    <?php if($page_index == 1){ echo '</h1>'; } else if($logoImgBgBefore == 1) { echo '</div>'; } ?>    
    
    <!--Con Gettext-->
    <?php if($page_index == 1){ echo '<h1 class="logoH">'; } else if($logoImgBgBefore == 1) { echo '<div class="logoBefore">'; }?>
    <!-- Gettext_Alt --><a href="/nuevo/<?php if($idioma == 'en_US'){ echo '?l=en'; } ?>" class="pRel displayBlock <?php if($page_int == 1){ echo 'logoH'; } ?>">
    <a href="/nuevo/<?php if($gettext_idioma == 'pt_BR'){ echo '?l=pt_BR';
        } else if($gettext_idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>" class="pRel displayBlock <?php if($page_int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo $company_name_full ?>." class="displayBlock">
    </a>
    <?php if($page_index == 1){ echo '</h1>'; } else if($logoImgBgBefore == 1) { echo '</div>'; } ?>  
    
    <?php include('nav.inc.php'); ?>
</header>
