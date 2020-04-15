<!doctype html>
<html lang="<?php echo $site_lang_HTML_attr; ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no">
<meta name="robots" content="index,follow">
<meta name="generator" content="NetBeans IDE">
<meta name="rating" content="General">
<meta name="geo.region" content="<?php echo $site_lang_code_country; ?>">

<!-- Google No Translate -->
<meta name="google" content="notranslate">

<!-- Safari tel-->
<meta name="format-detection" content="telephone=no">

<title><?php echo $site_title; ?></title>
<title><?php if($gettext_idioma == 'en_GB'){ echo $site_title_GB; } else if($gettext_idioma == 'pt_BR'){ echo $site_titleBR; } else { echo $site_title; } ?></title>

<meta name="description" content="<?php echo $site_desc; ?>">
<meta name="description" content="<?php if($gettext_idioma == 'en_GB'){ echo $site_desc_GB; } else if($gettext_idioma == 'pt_BR'){ echo $site_desc_PT; } else { echo $site_desc; } ?>">

<link href="/nuevo/css/styles.css" rel="stylesheet">
<link rel="author" href="humans.txt">

<link rel="canonical" href="<?php echo $url_global; ?>">

<!-- Copyright -->
<link rel="license" href="/nuevo/legal/copyright.php">

<!-- Idiomas -->
<link rel="alternate" href="<?php echo $url_global; ?>/?l=es_AR" hreflang="es">
<link rel="alternate" href="<?php echo $url_global; ?>/?l=es_ES" hreflang="es">
<link rel="alternate" href="<?php echo $url_global; ?>/?l=en_GB" hreflang="en">
<link rel="alternate" href="<?php echo $url_global; ?>/?l=de_DE" hreflang="de">
<link rel="alternate" href="<?php echo $url_global; ?>/?l=fr_FR" hreflang="fr">
<link rel="alternate" href="<?php echo $url_global; ?>/?l=pt_BR" hreflang="pt">

<!-- Información personal -->
<link rel="me" href="https://google.com/profiles/thenextweb" type="text/html">
<link rel="me" href="mailto:name@example.com">
<link rel="me" href="sms:+15035550125">

<!-- Archivo -->
<link rel="archives" href="http://example.com/archives/">

<!-- Notifies a URL when you link to it on your document -->
<link rel="webmention" href="http://example.com/webmention">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo $openGraph_title; ?>">
<meta property="og:url" content="<?php echo $openGraph_url; ?>">
<meta property="og:description" content="<?php echo $openGraph_desc; ?>">
<!--<meta property="og:image:secure_url" content="<?php echo $openGraph_url_img; ?>/og_img.jpg">-->
<meta property="og:image" content="<?php echo $openGraph_url_img; ?>/og_img.jpg">
<meta property="og:image:type" content="image/jpg">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo $openGraph_siteName; ?>">
<meta property="og:locale" content="<?php echo $site_lang_locale; ?>">

<meta property="og:title" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_title_GB; } else if($gettext_idioma == 'de_DE'){ echo $openGraph_title_DE; } else { echo $openGraph_title; } ?>">
<meta property="og:url" content="<?php echo $openGraph_url; ?>">
<meta property="og:description" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_desc_GB; } else if($gettext_idioma == 'de_DE'){ echo $openGraph_desc_DE; } else { echo $openGraph_desc; } ?>">
<meta property="og:image:secure_url" content="<?php echo $openGraph_url_img; ?>/og_img.jpg">
<meta property="og:image" content="<?php echo $openGraph_url_img; ?>/og_img.jpg">
<meta property="og:image:type" content="image/jpg">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_siteName_GB; } else if($gettext_idioma == 'de_DE'){ echo $openGraph_siteName_DE; } else { echo $openGraph_siteName; } ?>">
<meta property="og:locale" content="<?php if($gettext_idioma == 'en_GB'){ echo 'en_GB'; } else if($gettext_idioma == 'de_DE'){ echo 'de_DE'; } else { echo 'es_AR'; } ?>">

<!-- Facebook Open Graph -->
<meta property="fb:app_id" content="123456789">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@siteAccount">
<meta name="twitter:creator" content="@individualAccount">
<meta name="twitter:url" content="http://example.com/page.html">
<meta name="twitter:title" content="ContentTitle">
<meta name="twitter:description" content="ContentDescriptionLessThan200characters">
<meta name="twitter:image" content="http://example.com/image.jpg">

<!-- Google+ / Schema.org -->
<link href="https://plus.google.com/+YourPage" rel="publisher">
<meta itemprop="name" content="Content Title">
<meta itemprop="description" content="Content description less than 200 characters">
<meta itemprop="image" content="http://example.com/image.jpg">

<!-- Pinterest -->
<meta name="pinterest" content="nopin" description="Sorry, you can't save from my website!">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_global; ?>/nuevo/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo $url_global; ?>/nuevo/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo $url_global; ?>/nuevo/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo $url_global; ?>/nuevo/manifest.json">
<link rel="mask-icon" href="<?php echo $url_global; ?>/nuevo/safari-pinned-tab.svg" color="#000">
<meta name="msapplication-TileColor" content="#000">
<meta name="theme-color" content="#ffffff">

<!-- Google Android -->
<!-- Add to home screen -->
<meta name="mobile-web-app-capable" content="yes">
<!-- More info: https://developer.chrome.com/multidevice/android/installtohomescreen -->
<!-- Android app deep linking -->
<meta name="google-play-app" content="app-id=package-name">
<link rel="alternate" href="android-app://package-name/http/url-sample.com">

<!-- App Links -->
<!-- iOS -->
<meta property="al:ios:url" content="applinks://docs">
<meta property="al:ios:app_store_id" content="12345">
<meta property="al:ios:app_name" content="App Links">
<!-- Android -->
<meta property="al:android:url" content="applinks://docs">
<meta property="al:android:app_name" content="App Links">
<meta property="al:android:package" content="org.applinks">
<!-- Web Fallback -->
<meta property="al:web:url" content="http://applinks.org/documentation">

<!-- Jquery, Modernizr, HTML5shiv -->
<script src="/nuevo/js/jQuery3.2.1.min.js"></script>
<script src="/nuevo/js/modernizr2.8.3.js"></script>
<script src="/nuevo/js/html5shiv.min.js"></script>

<!-- Google Analytics -->
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