<?php $navItemInicio = ($nav_pageCurrent == 0)? "displayNone" : ""; ?>

<li class="displayNoneAT <?php if($nav_pageCurrent == 0) { echo 'displayNone current'; } ?>">
    <a <?php echo $href_seccion ?> class="<?php if ($nav_horizontalCenter_AT_act == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox" <?php if($nav_pageCurrent == 0) { echo 'aria-current="page"'; } ?>>
        <?php echo _("Inicio"); ?></a>
</li>
<li class="<?php if($nav_pageCurrent == 1) { echo 'current'; } ?>">
    <a <?php echo $href_seccion ?> class="<?php if ($nav_horizontalCenter_AT_act == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox" <?php if($nav_pageCurrent == 1) { echo 'aria-current="page"'; } ?>>
        <?php echo _("seccion"); ?></a>
</li>
<li class="liNoLink">
    <a href="<?php if($page_int == 1) { echo '/nuevo/index.php'; } ?>#seccion" class="<?php if ($nav_horizontalCenter_AT_act == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox">
        <?php echo _("seccion"); ?></a>
</li>
<!--Con gettext--> 
<li class="<?php if($nav_pageCurrent == 1) { echo 'current'; } ?>">
    <a href="/nuevo/<?php if($gettext_idioma == 'en_GB') { echo '?l=en'; } ?>" class="<?php if ($nav_horizontalCenter_AT_act == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox" <?php if($nav_pageCurrent == 1) { echo 'aria-current="page"'; } ?>>
        <?php echo _("seccion"); ?></a>
</li>


// Sub Level 1
<li class="nos hasSub hasSubLevel1 pRel <?php if($nav_pageCurrent == 2) { echo 'current'; }?>">
    <p class="topLevelItem TLI_level1 borderBox" id="nosNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nosSubMenu" class="subMenu subMenuLevel1 unstyled" role="group" aria-expanded="false" aria-labelledby="nosNavItem">
        <li class="<?php if($nav_pageCurrent_int == 200) { echo 'current'; } ?>">
            <a <?php echo $href_seccion ?> class="displayBlock borderBox" <?php if($nav_pageCurrent_int == 200) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Historia"); ?></a>
        </li>
    </ul>
</li>


// Sub Level 2
<li class="nos hasSub hasSubLevel1 pRel <?php if($nav_pageCurrent == 2) { echo 'current'; }?>">
    <p class="topLevelItem TLI_level1 borderBox" id="nosNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nosSubMenu" class="subMenu subMenuLevel1 unstyled" role="group" aria-expanded="false" aria-labelledby="nosNavItem">
        <li class="hasSub hasSubLevel2 <?php if($nav_pageCurrent_int == 210) { echo 'current'; } ?>">
            <p class="topLevelItem TLI_level2 borderBox" id="hisNavItem" aria-haspopup="true" aria-owns="hisSubMenu" aria-controls="hisSubMenu" role="button" aria-pressed="false">
                <?php echo _("Historia"); ?>
            </p>
            <ul id="hisSubMenu" class="subMenu subMenuLevel2 unstyled" role="group" aria-expanded="false" aria-labelledby="hisNavItem">
                <li class="<?php if($nav_pageCurrent_int == 211) { echo 'current'; } ?>">
                    <a <?php echo $href_seccion ?> class="displayBlock borderBox" <?php if($nav_pageCurrent_int == 211) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Comienzos"); ?></a>
                </li>
            </ul>    
        </li>
    </ul>
</li>