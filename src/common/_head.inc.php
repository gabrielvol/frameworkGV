<!doctype html>
<html lang="<?php echo $site_lang_HTML_attr; /* // REF [28] */ ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; font-src fonts.googleapis.com fonts.gstatic.com; frame-src youtube-nocookie.com youtube.com"> -->
<meta http-equiv="Permissions-Policy" content="interest-cohort=()">
<!-- <meta http-equiv="x-dns-prefetch-control" content="off"> -->
<meta http-equiv="Window-Target" content="_value">
<meta name="robots" content="index,follow">
<meta name="generator" content="NetBeans IDE">
<meta name="rating" content="General">
<meta name="referrer" content="no-referrer">
<meta name="geo.region" content="<?php echo $site_lang_code_country; ?>">

<!-- Google No Translate -->
<meta name="google" content="notranslate">

<!-- Safari tel -->
<meta name="format-detection" content="telephone=no">

<title><?php echo $page_title; ?></title>
<meta name="title" content="<?php echo $page_title; ?>">
<title><?php if($gettext_idioma == 'en_GB'){ echo $page_title_GB; } else if($gettext_idioma == 'xx_XX'){ echo $page_title_XX; } else { echo $page_title; } ?></title>

<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="description" content="<?php if($gettext_idioma == 'en_GB'){ echo $page_desc_GB; } else if($gettext_idioma == 'xx_XX'){ echo $page_desc_XX; } else { echo $page_desc; } ?>">

<!-- Google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet"> 

<!--<base href="<?php echo $url_main; ?>" target="_self">-->

<?php include('head.css.inc.php'); ?>

<link rel="author" href="<?php echo $dir_env; ?>/humans.txt">

<link rel="canonical" href="<?php echo $url_main; ?>">
<link rel="index" href="<?php echo $url_main; ?>">

<!-- Copyright -->
<link rel="license" href="<?php echo $dir_env; ?>/legal/copyright.php">

<!-- Idiomas -->
<link rel="alternate" href="<?php echo $url_main; ?>/?l=es_AR" hreflang="es">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=es_ES" hreflang="es">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=es_UY" hreflang="es">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=en_GB" hreflang="en">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=de_DE" hreflang="de">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=fr_FR" hreflang="fr">
<link rel="alternate" href="<?php echo $url_main; ?>/?l=pt_BR" hreflang="pt">

<?php /*
Prefetching, preloading, prebrowsing. More info: https://css-tricks.com/prefetching-preloading-prebrowsing/
DNS-prefetch, notifies the client that there are assets we’ll need later from a specific URL so the browser can resolve the DNS as quickly as possible
*/ ?>
<link rel="dns-prefetch" href="<?php echo $url_main; ?>/page.php">

<?php /* preconnect, resolve the DNS but it will also make the TCP handshake, and optional TLS negotiation */ ?>
<link rel="preconnect" href="<?php echo $url_main; ?>">

<?php /* prefetch, request a specific resource, download and store it in the cache for reference later */ ?>
<link rel="prefetch" href="<?php echo $url_main; ?>/image.jpg">

<?php /*  prerender, preemptively load all of the assets of a certain document */ ?>
<link rel="prerender" href="<?php echo $url_main; ?>/page.php">

<?php /* preload, force download an asset */ ?>
<link rel="preload" href="image.png" as="image">

<!-- Información personal -->
<link rel="me" href="https://google.com/profiles/thenextweb" type="text/html">
<link rel="me" href="mailto:name@example.com">
<link rel="me" href="sms:+15035550125">

<!-- Archivo -->
<link rel="archives" href="http://example.com/archives/">

<!-- Notifies a URL when you link to it on your document -->
<link rel="webmention" href="http://example.com/webmention">

<!-- Favicon -->
<link rel="icon" href="<?php echo $favicon_url; ?>/favicon.ico" sizes="any">
<link rel="icon" href="<?php echo $favicon_url; ?>/icon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_url; ?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_url; ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_url; ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo $favicon_url; ?>/manifest.webmanifest">
<link rel="mask-icon" href="<?php echo $favicon_url; ?>/safari-pinned-tab.svg" color="<?php echo $favicon_color_safariPinnedTab; ?>">
<meta name="msapplication-TileColor" content="<?php echo $favicon_color_msApplicationTile; ?>">
<meta name="theme-color" content="<?php echo $favicon_color_theme; ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo $openGraph_title; ?>">
<meta property="og:url" content="<?php echo $openGraph_url; ?>">
<meta property="og:description" content="<?php echo $openGraph_desc; ?>">
<?php /* <meta property="og:image:secure_url" content="<?php echo $openGraph_img_url_secure; ?>"> */ ?>
<meta property="og:image" content="<?php echo $openGraph_img_url; ?>">
<meta property="og:image:type" content="<?php echo $openGraph_img_type; ?>">
<meta property="og:image:width" content="<?php echo $openGraph_img_width; ?>">
<meta property="og:image:height" content="<?php echo $openGraph_img_height; ?>">
<meta property="og:type" content="<?php echo $openGraph_type; ?>">
<meta property="og:site_name" content="<?php echo $openGraph_siteName; ?>">
<meta property="og:locale" content="<?php echo $openGraph_locale; ?>">

<meta property="og:type" content="video.other">
<meta property="og:video:url" content="https://shoesbycolin.com/blue.mp4">
<meta property="og:video:secure_url" content="https://shoesbycolin.com/blue.mp4">
<meta property="og:video:type" content="video/mp4">
<meta property="og:video:width" content="1280">
<meta property="og:video:height" content="720">

<meta property="og:title" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_title_GB; } else if($gettext_idioma == 'xx_XX'){ echo $openGraph_title_XX; } else { echo $openGraph_title; } ?>">
<meta property="og:url" content="<?php echo $openGraph_url; ?>">
<meta property="og:description" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_desc_GB; } else if($gettext_idioma == 'xx_XX'){ echo $openGraph_desc_XX; } else { echo $openGraph_desc; } ?>">
<meta property="og:image:secure_url" content="<?php echo $openGraph_img_url; ?>">
<meta property="og:image" content="<?php echo $openGraph_img_url; ?>">
<meta property="og:image:type" content="<?php echo $openGraph_img_type; ?>">
<meta property="og:image:width" content="<?php echo $openGraph_img_width; ?>">
<meta property="og:image:height" content="<?php echo $openGraph_img_height; ?>">
<meta property="og:type" content="<?php echo $openGraph_type; ?>">
<meta property="og:site_name" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_siteName_GB; } else if($gettext_idioma == 'xx_XX'){ echo $openGraph_siteName_XX; } else { echo $openGraph_siteName; } ?>">
<meta property="og:locale" content="<?php if(isset($gettext_idioma)){ echo $gettext_idioma; } else { echo $openGraph_locale; } ?>">

<!-- Facebook Open Graph -->
<meta property="fb:app_id" content="123456789">

<!-- Twitter Card -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo $url_main; ?>">
<meta property="twitter:title" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_title_GB; } else if($gettext_idioma == 'xx_XX'){ echo $openGraph_title_XX; } else { echo $openGraph_title; } ?>">
<meta property="twitter:description" content="<?php if($gettext_idioma == 'en_GB'){ echo $openGraph_desc_GB; } else if($gettext_idioma == 'xx_XX'){ echo $openGraph_desc_XX; } else { echo $openGraph_desc; } ?>">
<meta property="twitter:image" content="<?php echo $openGraph_img_url_big; ?>">

<!-- Pinterest -->
<meta name="pinterest" content="nopin" description="Sorry, you can't save from my website!">

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

<?php include('head.js.inc.php'); ?>

<?php if(empty($dir_env)): /* Google Analytics */ ?>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-xxxxxxxxxx"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-xxxxxxxxxx');
</script>
<?php endif; ?>