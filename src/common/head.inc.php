<!doctype html>
<html lang="es-AR">
<head>
<meta charset="utf-8"/>
<title><?php echo $title ?></title>
<title><?php if($idioma == 'en_GB'){ echo $titleEN; } else if($idioma == 'pt_BR'){ echo $titleBR; } else { echo $title; } ?></title>
<meta name="description" content="<?php echo $mdesc ?>"/>
<!--<meta name="viewport" content="width=device-width,initial-scale=1" />-->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="/framework/css/styles.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="/framework/common/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/framework/common/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/framework/common/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/framework/common/manifest.json">
<link rel="mask-icon" href="/framework/common/safari-pinned-tab.svg" color="#000">
<meta name="theme-color" content="#ffffff">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/framework/js/modernizr2.8.3.js"></script>
<script type="text/javascript" src="/framework/js/html5shiv.min.js"></script>
<!--<script type='text/javascript' src='http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js'></script>-->

<!--
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-xxxxxxxx-x']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->