<nav id="nav" class="nav_nav pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
    <button type="button" class="button_hamb button_hamb_open" aria-pressed="false"><span class="visuallyHidden"><?php echo _("Abrir"); ?></span> <?php echo _("Men&uacute;"); ?></button>
    <button type="button" class="button_hamb button_hamb_close"><?php echo _("Cerrar"); ?> <span class="visuallyHidden"><?php echo _("Men&uacute;"); ?></span></button>
    <ul class="nav_main_ul navAT unstyled clearfix">
        <?php include('nav.list.inc.php'); ?>
    </ul>   
    
    <?php
        if($nav_drawer_act == 1){
            echo '<ul class="nav_main_ul nav_main_ul_drawer unstyled clearfix">';

            if ($nav_sectionHasSub_act == 1) {
                echo '<li class="nav_item_back nav_item_hasSubNav nav_item_hasSubNav_level1 displayNoneAT">
                    <p id="nav_TLI_back" class="nav_TLI" aria-haspopup="true" aria-owns="nav_item_back_subNav" aria-controls="nav_item_back_subNav" role="button" aria-pressed="false">'. _("Men&uacute; principal").'</p>
                    <ul id="nav_item_back_subNav" class="nav_subNav nav_subNav_level1 nav_item_back_subNav unstyled" aria-expanded="false" aria-labelledby="nav_TLI_back">';
                        include('nav.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.list.inc.php');
            }    
            
            echo '</ul>
            <div class="modal_bg_global modal_nav">&nbsp;</div>';
        }
    ?>
</nav>