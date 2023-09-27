<a href="#main" id="go-main-content"><?php if($gettext_idioma == 'en_GB'): ?>
        Go to the main content of the site.
        <?php else: ?>
        Ir al contenido principal de esta p&aacute;gina.
        <?php endif; ?></a>
<header id="header" <?php echo $classes_header; ?>>    
    <?php
        if($nav_pageCurrent == 'page_index') { echo '<h1 class="logo_header">'; } 
        if($nav_pageCurrent == 'page_index' && $logo_bgImage_before_act == 1) { echo '<div class="logo_before">'; }
    ?>
    <a <?php echo $href_logo; ?> class="<?php if($page_int == 1) { echo 'logo_header'; } ?>">
        <?php if($page_int == 1 && $logo_bgImage_before_act == 1) { echo '<div class="logo_before">'; } ?>
            <img src="<?php echo $dir_env; ?>/img/logo_header.svg" alt="<?php echo $site_name_full; ?>." />
        <?php if($page_int == 1 && $logo_bgImage_before_act == 1) { echo '</div>'; } ?>
    </a>
    <?php
        if($nav_pageCurrent == 'page_index' && $logo_bgImage_before_act == 1) { echo '</div>'; }
        if($nav_pageCurrent == 'page_index') { echo '</h1>'; }
    ?>  
    
    <?php include('nav.main.inc.php'); ?>
        
    <?php /*
        if($dir_env == "/test"){
            include('nav.language.inc.php');
        }
    */ ?>
</header>
