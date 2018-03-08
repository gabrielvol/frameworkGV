<nav id="nav" class="navMain container pRel" aria-label="<?php echo _("Men&uacute; principal del sitio."); ?>">
    <button class="hamb openNav pAbs displayNone displayBlockBT alignCenter upperCase" aria-pressed="false"><?php echo _("Men&uacute;"); ?></button>
    <button class="hamb closeNav pAbs indentedText"><?php echo _("Cerrar"); ?></button>
    <ul class="mainMenu unstyled horizontalAT clearfix">
        <li>
            <a href="/nuevo/" class="displayBlockBT" <?php if($navCurrent == 0) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Inicio"); ?></a>
        </li>
        <li class="<?php if($navCurrent == 1) { echo "current"; } ?>">
            <a href="/nuevo/" class="displayBlockBT" <?php if($navCurrent == 1) { echo 'aria-current="page"'; } ?>>
                <?php echo _("seccion"); ?></a>
        </li>
        
        <li class="nos hasSub <?php if($navCurrent == 100) { echo "current"; } ?>">
            <p class="topLevelItem" id="nosNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" role="button" aria-pressed="false">
                <?php echo _("Nosotros"); ?>
            </p>
            <ul id="nosSubMenu" role="group" aria-expanded="false" aria-labelledby="nosNavItem" class="subMenu unstyled">
                <li class="<?php if($navCurrentInt == 100) { echo "current"; } ?>">
                    <a href="/nuevo/nosotros/historia.php" class="displayBlock" <?php if($navCurrentInt == 100) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Historia"); ?></a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="modalBG modalNav">&nbsp;</div>
</nav>