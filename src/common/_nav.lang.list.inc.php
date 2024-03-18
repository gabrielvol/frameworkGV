<?php
/* * NombreDeProyecto * ========================================================
   Nav Language List [/src/var/nav.lang.list.inc.php]
   ========================================================================== */

// Nav para cambiar idioma del sitio
//
// REF [14a] // Idioma Chino ZH, MingLiu font
// REF [33] // Activador, nav_lang
// REF [37] // Nav language square


        
$gettext_switchMsg_AR       = "Naveg&aacute; el sitio en idioma castellano";
$gettext_languageName_AR    = "Castellano";

$gettext_switchMsg_BR       = "Navegar no site em Portugu&ecirc;s";
$gettext_languageName_BR    = "Portugu&ecirc;s";

$gettext_switchMsg_DE       = "Durchsuchen Sie die Website in deutscher Sprache";
$gettext_languageName_DE    = "Deustche";

$gettext_switchMsg_ES       = "Navegar el sitio en idioma espa&ntilde;ol";
$gettext_languageName_ES    = "Espa&ntilde;ol";

$gettext_switchMsg_FR       = "Parcourir le site en langue fran&ccedil;aise";
$gettext_languageName_FR    = "Fran&ccedil;aise";

$gettext_switchMsg_GB       = "Switch to English version";
$gettext_languageName_GB    = "English";

$gettext_switchMsg_JP       = "sinTraduccion";
$gettext_languageName_JP    = "sinTraduccion";

$gettext_switchMsg_US       = "Switch to English version";
$gettext_languageName_US    = "English";

$gettext_switchMsg_UY       = "Naveg&aacute; el sitio en idioma castellano";
$gettext_languageName_UY    = "Castellano";

$gettext_switchMsg_ZH       = "sinTraduccion";
$gettext_languageName_ZH    = "sinTraduccion";

?>

<li>
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if($gettext_idioma == 'es_AR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_ar.svg" alt="<?php echo $gettext_switchMsg_AR; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_AR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=pt" hreflang="pt" class="hover_grow_M_ani <?php if($gettext_idioma == 'pt_BR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_br.svg" alt="<?php echo $gettext_switchMsg_BR; ?>." />
        <span class="visuallyHidden" lang="pt"><?php echo $gettext_languageName_BR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=de" hreflang="de" class="hover_grow_M_ani <?php if($gettext_idioma == 'de_DE'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_de.svg" alt="<?php echo $gettext_switchMsg_DE; ?>." />
        <span class="visuallyHidden" lang="de"><?php echo $gettext_languageName_DE; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if($gettext_idioma == 'es_ES'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_es.svg" alt="<?php echo $gettext_switchMsg_ES; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_ES; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=fr" hreflang="fr" class="hover_grow_M_ani <?php if($gettext_idioma == 'fr_FR'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_fr.svg" alt="<?php echo $gettext_switchMsg_FR; ?>." />
        <span class="visuallyHidden" lang="fr"><?php echo $gettext_languageName_FR; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=en" hreflang="en" class="hover_grow_M_ani <?php if($gettext_idioma == 'en_GB'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_gb.svg" alt="<?php echo $gettext_switchMsg_GB; ?>." />
        <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_GB; ?></span>
    </a>
</li>
<li>
    <a href="<?php echo $dir_env; ?>/?l=ja" hreflang="ja" class="hover_grow_M_ani <?php if($gettext_idioma == 'ja_JP'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_jp.svg" alt="<?php echo $gettext_switchMsg_JP; ?>." />
        <span class="visuallyHidden" lang="ja"><?php echo $gettext_languageName_JP; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=en" hreflang="en" class="hover_grow_M_ani <?php if($gettext_idioma == 'en_US'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>." />
        <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_US; ?></span>
    </a>
</li>
<li class="flag_alignedLeft">
    <a href="<?php echo $dir_env; ?>/?l=es" hreflang="es" class="hover_grow_M_ani <?php if($gettext_idioma == 'es_UY'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_uy.svg" alt="<?php echo $gettext_switchMsg_UY; ?>." />
        <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_UY; ?></span>
    </a>
</li>
<li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
    <a href="<?php echo $dir_env; ?>/zh" hreflang="zh" class="hover_grow_M_ani <?php if($gettext_idioma == 'en_US'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
        <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
    </a>
</li>
<li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
    <a href="<?php echo $dir_env; ?>/?l=zh" hreflang="zh" class="hover_grow_M_ani <?php if($gettext_idioma == 'zh_CN'){ echo ' nav_lang_anchor_current'; } ?>">
        <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
        <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
    </a>
</li>

<?php /* // REF [37]
if($gettext_idioma == 'en_GB'):
    include ('nav.lang.item.sq.es.inc.php');

elseif($gettext_idioma == 'es_AR'):        
    include ('nav.lang.item.sq.en.inc.php');

endif; */ ?>