<?php
/* * NombreDeProyecto * ========================================================
   Redirect <meta> window.location.href [/src/common/page.redirect.script.inc.php]
   ========================================================================== 

// REF [53*] Page redirect
*/
?>

<meta http-equiv="refresh" content="0; url=<?php echo $page_redirect_url; ?>">
<script type="text/javascript">
    window.location.href = "<?php echo $page_redirect_url; ?>";
</script>