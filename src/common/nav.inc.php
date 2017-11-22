<nav id="nav" class="navMain container pRel" aria-label="<?php echo _("Men&uacute; principal del sitio."); ?>">
    <button class="hamb openNav pAbs displayNone displayBlockBT alignCenter upperCase" aria-pressed="false"><?php echo _("Men&uacute;"); ?></button>
    <button class="hamb closeNav pAbs indentedText"><?php echo _("Cerrar"); ?></button>
    <ul class="mainMenu displayNoneBT unstyled horizontalAT clearfix">
        <li class="<?php if($navCurrent == 1) { echo "current"; } ?>">
            <a href="/nuevo/" class="displayBlockBT" <?php if($navCurrent == 1) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Inicio"); ?></a></li>
        
        <li class="nos hasSub <?php if($navCurrent == 1) { echo "current"; } ?>">
            <a href="/nuevo/nosotros/" id="nosoNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" aria-expanded="false" class="displayBlock upperCase alignCenter" <?php if($navCurrent == 1) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Nosotros"); ?>
            </a>
            <ul id="nosSubMenu" role="group" aria-expanded="false" aria-labelledby="nosNavItem" class="subMenu unstyled">
                <li <?php if($navCurrentInt == 1) { echo "current"; } ?>>
                    <a href="/nuevo/nosotros/historia.php" class="displayBlock" <?php if($navCurrentInt == 1) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Historia"); ?></a></li>
            </ul>
        </li>
        
        <li class="nos hasSub <?php if($navCurrent == 1) { echo "current"; } ?>">
            <p href="/nuevo/nosotros/" id="nosoNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" aria-expanded="false" class="topLevelItem upperCase alignCenter" role="button">
                <?php echo _("Nosotros"); ?>
            </p>
            <ul id="nosSubMenu" role="group" aria-expanded="false" aria-labelledby="nosNavItem" class="subMenu unstyled">
                <li <?php if($navCurrentInt == 1) { echo "current"; } ?>>
                    <a href="/nuevo/nosotros/historia.php" class="displayBlock" <?php if($navCurrentInt == 1) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Historia"); ?></a></li>
            </ul>
        </li>
    </ul>
    <div class="modalBG modalNav displayNoneBT">&nbsp;</div>
</nav>