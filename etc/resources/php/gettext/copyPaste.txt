/* =============================================================================
   Gettext Copy Paste
   ========================================================================== */
<?php echo _(""); ?>
<?php echo _("
"); ?>

<?php echo _(''); ?>
<?php echo _('
'); ?>

<p><?php echo _(""); ?></p>
<p><?php echo _("
"); ?></p>

<p><?php echo _(""); ?>.</p>
<p><?php echo _("
"); ?>.</p>

<p><?php echo _(''); ?></p>
<p><?php echo _('
'); ?></p>

<p><?php echo _(''); ?>.</p>
<p><?php echo _('
'); ?>.</p>



<span><?php echo _(""); ?></span>
<span><?php echo _("
"); ?></span>

<span><?php echo _(""); ?>.</span>
<span><?php echo _("
"); ?>.</span>

<span><?php echo _(''); ?></span>
<span><?php echo _('
'); ?></span>

<span><?php echo _(''); ?>.</span>
<span><?php echo _('
'); ?>.</span>

<?php echo _("contextoo" . "\004" . "ejemplooo"); ?>


<?php if($l == 'en_GB'): ?>
    <p>texto</p>
<?php else: ?>
    <p>texto</p>
<?php endif; ?>

/* -----------------------------------------------------------------------------
   php echo 
   -------------------------------------------------------------------------- */ 
echo '<h1 class="'._("text").'">';
$phpVariable = _('text');


/* -----------------------------------------------------------------------------
   # href
   -------------------------------------------------------------------------- */ 
href="/link.php<?php if($gettext_idioma == 'pt_BR'){ echo '?l=pt'; } else if($gettext_idioma == 'en_GB'){ echo '?l=en'; } else { echo '?l=es'; } ?>#anchorID"
href="/link.php<?php if($gettext_idioma == 'en_GB'){ echo '?l=en'; } else { echo '?l=es'; } ?>#anchorID"

href="?l=pt"

href="?l=en_GB"

href="?l=es_AR"

href="?l=it_IT"

<!-- Gettext_Alt -->
<?php if($gettext_idioma == 'en_US'){ echo '?l=en'; } ?>


/* -----------------------------------------------------------------------------
   # src
   -------------------------------------------------------------------------- */
src="/img/<?php if($gettext_idioma == 'pt_BR'){ echo '/it/'; } else if($gettext_idioma == 'en_GB'){ echo '/en/'; } else { echo '/'; } ?>img_file.jpg"


/* -----------------------------------------------------------------------------
   # css
   -------------------------------------------------------------------------- */
class="<?php if($gettext_idioma == 'pt_BR'){ echo 'ITlang'; } else if($gettext_idioma == 'en_GB'){ echo 'lang_EN'; } else { echo ''; } ?>"

<?php if($l == 'it'){ echo 'ITlang'; } else if($l == 'en'){ echo 'lang_EN'; } else { echo ''; } ?>
<?php if($gettext_idioma == 'pt_BR'){ echo 'ITlang'; } else if($gettext_idioma == 'en_GB'){ echo 'lang_EN'; } else { echo ''; } ?>
&.BRlang{}
&.lang_EN{}
&.ITlang{}
&.ARlang{}


<?php if($gettext_idioma == 'en_GB'): ?>

<?php endif; if($gettext_idioma == 'es_AR'): ?>

<?php endif; ?>

<?php if($l == 'en_GB'): ?>
<h2>Uruguay</h2>
<?php else: ?>
<h2>Uruguay</h2>
<?php endif; ?>