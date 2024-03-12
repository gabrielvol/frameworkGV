<?php
/* * NombreDeProyecto * ========================================================
   Nav Main List [/src/common/nav.main.list.inc.php]
   ========================================================================== */

// Las variables `$nav_main_item_XXX` se encuentran en `[/src/var/meta.titlesDesc.var.inc.php]`

?>



<li class="nav_item_home <?php if($nav_pageCurrent == 'page_index') { echo ' visuallyHidden nav_item_current'; } ?>">
    <a <?php echo $href_index; if($nav_pageCurrent == 'page_index') { echo ' aria-current="page"'; } ?>>
        <?php echo $nav_main_item_home; ?>
    </a>
</li>
<li class="nav_item_contacto <?php if($nav_pageCurrent == 'page_contacto') { echo ' nav_item_current'; } ?>">
    <a <?php echo $href_contacto; if($nav_pageCurrent == 'page_contacto') { echo ' aria-current="page"'; } ?>>
        <?php echo $nav_main_item_contacto; ?>
    </a>
</li>
<li class="nav_item_PAGINA <?php if($nav_pageCurrent == 'page_PAGINA') { echo ' nav_item_current'; } ?>">
    <a <?php echo $href_PAGINA; if($nav_pageCurrent == 'page_PAGINA') { echo ' aria-current="page"'; } ?>>
        <?php echo $nav_main_item_PAGINA; ?>
    </a>
</li>

<li class="nav_item_home nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_top_hs_HOME; } else { echo $hash_top; } ?>">
        <?php echo $nav_main_item_home; ?>
    </a>
</li>
<li class="nav_item_PAGINA nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_SECCION_hs_HOME; } else { echo $hash_SECCION; } ?>">
        <?php echo $nav_main_item_PAGINA; ?>
    </a>
</li>
<li class="nav_item_contacto nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_contacto_hs_HOME; } else { echo $hash_contacto; } ?>">
        <?php echo $nav_main_item_contacto; ?>
    </a>
</li>

<?php /* Con gettext */ ?>
<li class="nav_item_PAGINA nav_item_noLink_js">
    <a <?php if($page_int == 1) { echo 'href="'. $url_PAGINA_full_gettext .'"'; } else { echo $href_PAGINA_gettext; } ?>>
        <?php echo $nav_main_item_PAGINA; ?>
    </a>
</li>


<?php /* Sub Level 1 */ ?>
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 'page_nosotros') { echo ' nav_item_current'; } ?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo $nav_main_item_nosotros; ?>
    </p>
    
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">        
        <li class="<?php if($nav_pageCurrent_int == 'page_nosotros_home') { echo ' nav_item_current'; } ?>">
            <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'page_nosotros_home') { echo ' aria-current="page"'; } ?>>
                <?php echo $nav_main_item_nosotros_home; ?>
            </a>
        </li>
        
        <li class="<?php if($nav_pageCurrent_int == 'page_nosotros_nuestraHistoria') { echo ' nav_item_current'; } ?>">
            <a <?php echo $href_nuestraHistoria; if($nav_pageCurrent_int == 'page_nosotros_nuestraHistoria') { echo ' aria-current="page"'; } ?>>
                <?php echo $nav_main_item_nuestraHistoria; ?>
            </a>
        </li>
        
        <li class="<?php if($nav_pageCurrent_int == 'page_PAGINA_home') { echo ' nav_item_current'; } ?>">
            <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'page_PAGINA_home') { echo ' aria-current="page"'; } ?>>
                <?php echo $nav_main_item_PAGINA; ?>
            </a>
        </li>
    </ul>
</li>


<?php /* Sub Level 2 */ ?>
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 'page_nosotros') { echo ' nav_item_current'; }?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo $nav_main_item_nosotros; ?>
    </p>
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">
        <li class="nav_item_historia nav_item_hasSubNav nav_item_hasSubNav_level2 <?php if($nav_pageCurrent_int == 'page_historia_home') { echo ' nav_item_current'; } ?>">
            <p id="nav_TLI_historia" class="nav_TLI nav_TLI_level2" aria-haspopup="true" aria-owns="nav_item_historia_subNav" aria-controls="nav_item_historia_subNav" role="button" aria-pressed="false">
                <?php echo $nav_main_item_historia_home; ?>
            </p>
            <ul id="nav_item_historia_subNav" class="nav_subNav nav_subNav_level2 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_historia">
                <li class="<?php if($nav_pageCurrent_int == 'page_historia_comienzos') { echo ' nav_item_current'; } ?>">
                    <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'page_historia_comienzos') { echo ' aria-current="page"'; } ?>>
                        <?php echo $nav_main_item_comienzos; ?>
                    </a>
                </li>  
        
                <li class="<?php if($nav_pageCurrent_int == 'page_PAGINA_ID') { echo ' nav_item_current'; } ?>">
                    <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'page_PAGINA_ID') { echo ' aria-current="page"'; } ?>>
                        <?php echo $nav_main_item_PAGEID; ?>
                    </a>
                </li>
            </ul>    
        </li>    
        
        <li class="<?php if($nav_pageCurrent_int == 'page_PAGINA_home') { echo ' nav_item_current'; } ?>">
            <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'page_PAGINA_home') { echo ' aria-current="page"'; } ?>>
                <?php echo $nav_main_item_PAGINA; ?>
            </a>
        </li>
    </ul>
</li>