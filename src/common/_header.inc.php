<?php if($dir_env !== ''): ?><div id="dev_window_width"></div><?php endif; /* // REF [48] Dev window width */ ?>

<a lang="<?php echo $site_lang_HTML_attr; ?>" href="#main" id="go-main-content"><?php if($l == 'en_GB'): ?>
    Go to main content
<?php
/* elseif($l == 'zh_CN'): ?>
    跳转到本页主要内容

<?php */

else: ?>
    Ir al contenido principal de esta p&aacute;gina
<?php endif; ?>.</a>
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
            include('nav.lang.inc.php');
        }
    */ ?>
</header>
