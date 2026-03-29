<?php
/* * NombreDeProyecto * ========================================================
   Nav Language List [/src/common/nav.lang.list.inc.php]
   ========================================================================== */

// Nav para cambiar idioma del sitio
//
// REF [14a] // Idioma Chino ZH, MingLiu font
// REF [33] // Activador, nav_lang
// REF [37] // Nav language square

// Las variables `$gettext_lang_msg_switch_AR` y `$gettext_lang_name_AR`
// están definidas en `[/src/gettext/languageCheck.inc.php]`
?>

<li>
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'es_AR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_ar.svg" alt="<?php echo $gettext_lang_msg_switch_AR; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_lang_name_AR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=pt" hreflang="pt" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'pt_BR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_br.svg" alt="<?php echo $gettext_lang_msg_switch_BR; ?>." />
        <span class="visuallyHidden" lang="pt"><?php echo $gettext_lang_name_BR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=de" hreflang="de" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'de_DE'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_de.svg" alt="<?php echo $gettext_lang_msg_switch_DE; ?>." />
        <span class="visuallyHidden" lang="de"><?php echo $gettext_lang_name_DE; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'es_ES'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_es.svg" alt="<?php echo $gettext_lang_msg_switch_ES; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_lang_name_ES; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=fr" hreflang="fr" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'fr_FR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_fr.svg" alt="<?php echo $gettext_lang_msg_switch_FR; ?>." />
        <span class="visuallyHidden" lang="fr"><?php echo $gettext_lang_name_FR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=en" hreflang="en" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_gb.svg" alt="<?php echo $gettext_lang_msg_switch_GB; ?>." />
        <span class="visuallyHidden" lang="en"><?php echo $gettext_lang_name_GB; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=ja" hreflang="ja" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'ja_JP'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_jp.svg" alt="<?php echo $gettext_lang_msg_switch_JP; ?>." />
        <span class="visuallyHidden" lang="ja"><?php echo $gettext_lang_name_JP; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=en" hreflang="en" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'en_US'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_us.svg" alt="<?php echo $gettext_lang_msg_switch_US; ?>." />
        <span class="visuallyHidden" lang="en"><?php echo $gettext_lang_name_US; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'es_UY'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_uy.svg" alt="<?php echo $gettext_lang_msg_switch_UY; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_lang_name_UY; ?></span>
    </a>
</li>
<li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
    <a href="<?php echo $dir_env; ?>/zh" hreflang="zh" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'en_US'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_lang_msg_switch_ZH; ?>." />
        <span class="visuallyHidden" lang="zh"><?php echo $gettext_lang_name_ZH; ?></span>
    </a>
</li>
<li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
    <a href="<?php echo $dir_env; ?>/?l=zh" hreflang="zh" class="hover_grow_M_ani <?php if(isset($gettext_lang) && $gettext_lang == 'zh_CN'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_lang_msg_switch_ZH; ?>." />
        <span class="visuallyHidden" lang="zh"><?php echo $gettext_lang_name_ZH; ?></span>
    </a>
</li>

<?php /* // REF [37]
if(isset($gettext_lang) && $gettext_lang == 'en_GB'):
    include ('nav.lang.item.sq.es.inc.php');

elseif(isset($gettext_lang) && $gettext_lang == 'es_AR'):        
    include ('nav.lang.item.sq.en.inc.php');

endif; */ ?>