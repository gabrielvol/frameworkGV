<nav id="nav" class="navMain pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
    <button type="button" class="hamb navOpen pAbs displayBlockBT alignCenter upperCase" aria-pressed="false"><?php echo _("Men&uacute;"); ?></button>
    <button type="button" class="hamb navClose pAbs indentedText"><?php echo _("Cerrar"); ?></button>
    <ul class="mainMenu navAT unstyled clearfix">
        <?php include('nav.list.inc.php'); ?>
    </ul>   
    
    <?php
        if($nav_drawer_act == 1){
            echo '<ul class="mainMenu navDrawerMainUL unstyled clearfix">';

            if ($nav_sectionHasSub_act == 1) {
                echo '<li class="backMenu pRel hasSub hasSubLevel1 displayNoneAT">
                    <p id="backMenuNavItem" class="topLevelItem" aria-haspopup="true" aria-owns="backMenuSubMenu" aria-controls="backMenuSubMenu" role="button" aria-pressed="false">'. _("Men&uacute; principal").'</p>
                    <ul id="backMenuSubMenu" class="subMenu subMenuLevel1 backMenuSubMenu unstyled" aria-expanded="false" aria-labelledby="backMenuNavItem">';
                        include('nav.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.list.inc.php');
            }    
            
            echo '</ul>
            <div class="modalBG modal_nav">&nbsp;</div>';
        }
    ?>
</nav>