<!doctype html>
<html lang="<?php echo $site_lang_HTML_attr; /* // REF [28] */ ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains">

<?php /*
<meta http-equiv="X-Content-Type" content="nosniff">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
<meta http-equiv="Content-Security-Policy" content="default-src 'self'; font-src fonts.googleapis.com fonts.gstatic.com; frame-src youtube-nocookie.com youtube.com"> 
<meta http-equiv="x-dns-prefetch-control" content="off">
<meta name="Referrer-Policy" content="strict-origin-when-cross-origin">
*/ ?>

<meta http-equiv="Permissions-Policy" content="interest-cohort=()">
<meta http-equiv="Window-Target" content="_value">
<meta name="robots" content="index,follow">
<?php /* <meta name="robots" content="noindex"> */ ?>
<meta name="generator" content="NetBeans IDE">
<meta name="rating" content="General">
<meta name="geo.region" content="<?php echo $site_lang_code_country; ?>">

<?php /* Google No Translate */ ?>
<meta name="google" content="notranslate">

<?php /* Safari tel */ ?>
<meta name="format-detection" content="telephone=no">

<title><?php echo $page_title; ?></title>
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="description" content="<?php echo $page_desc; ?>">
  
<?php if($topbar_hide_mobile): /* // REF [47] */ ?>
    <style>
        .pretopbar + .topbar_js{display: none!important;}    
    </style>
<?php endif; ?>

<?php /* Google Fonts // REF [01] */ ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;800&display=swap" rel="stylesheet">

<?php /* <base href="<?php echo $url_main; ?>" target="_self"> */ ?>

<?php include('head.css.inc.php'); ?>

<link rel="author" href="<?php echo $dir_env; ?>/humans.txt">

<link rel="canonical" href="<?php echo $url_main; ?>">
<link rel="index" href="<?php echo $url_main; ?>">

<?php /* Copyright */ ?>
<link rel="license" href="<?php echo $dir_env; ?>/legal/copyright.php">

<?php /* Idiomas */ ?>
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
<link rel="prefetch" href="<?php echo $url_wip; ?>/image.jpg">

<?php /*  prerender, preemptively load all of the assets of a certain document */ ?>
<link rel="prerender" href="<?php echo $url_main; ?>/page.php">

<?php /* preload, force download an asset */ ?>
<link rel="preload" href="image.png" as="image">

<?php /* Información personal */ ?>
<link rel="me" href="https://google.com/profiles/thenextweb" type="text/html">
<link rel="me" href="mailto:name@example.com">
<link rel="me" href="sms:+15035550125">

<?php /* Archivo */ ?>
<link rel="archives" href="http://example.com/archives/">

<?php /* Notifies a URL when you link to it on your document */ ?>
<link rel="webmention" href="http://example.com/webmention">

<?php /* Favicon */ ?>
<link rel="icon" type="image/png" href="<?php echo $favicon_url; ?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo $favicon_url; ?>/favicon.svg" />
<link rel="icon" type="image/svg+xml" href="<?php echo $favicon_url; ?>/icon.svg" />
<link rel="shortcut icon" href="<?php echo $favicon_url; ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_url; ?>/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="sitioweb" />
<link rel="manifest" href="<?php echo $favicon_url; ?>/site.webmanifest" />
<link rel="manifest" href="<?php echo $favicon_url; ?>/manifest.webmanifest" />

<?php /* Open Graph */ ?>
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
<meta property="og:video:url" content="<?php echo $openGraph_url; ?>/file.mp4">
<meta property="og:video:secure_url" content="<?php echo $openGraph_url; ?>/file.mp4">
<meta property="og:video:type" content="video/mp4">
<meta property="og:video:width" content="1280">
<meta property="og:video:height" content="720">

<?php /* Facebook Open Graph */ ?>
<meta property="fb:app_id" content="123456789">

<?php /* Twitter Card */ ?>
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo $openGraph_url; ?>">
<meta property="twitter:title" content="<?php echo $openGraph_title; ?>">
<meta property="twitter:description" content="<?php echo $openGraph_desc; ?>">
<meta property="twitter:image" content="<?php echo $openGraph_img_url; ?>">

<?php /* Pinterest */ ?>
<meta name="pinterest" content="nopin" description="Sorry, you can't save from my website!">

<?php /* Google Android */ ?>
<?php /* Add to home screen */ ?>
<meta name="mobile-web-app-capable" content="yes">
<?php /* More info: https://developer.chrome.com/multidevice/android/installtohomescreen */ ?>
<?php /* Android app deep linking */ ?>
<meta name="google-play-app" content="app-id=package-name">
<link rel="alternate" href="android-app://package-name/http/url-sample.com">

<?php /* App Links */ ?>
<?php /* iOS */ ?>
<meta property="al:ios:url" content="applinks://docs">
<meta property="al:ios:app_store_id" content="12345">
<meta property="al:ios:app_name" content="App Links">
<?php /* Android */ ?>
<meta property="al:android:url" content="applinks://docs">
<meta property="al:android:app_name" content="App Links">
<meta property="al:android:package" content="org.applinks">
<?php /* Web Fallback */ ?>
<meta property="al:web:url" content="http://applinks.org/documentation">

<?php
    include('head.js.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/speller.inc.php');
?>

<?php if(empty($dir_env) && empty($page_noTrack)): /* Facebook Pixel */ ?>
<?php endif; ?>

</head>

<?php if(empty($dir_env) && empty($page_noTrack)): /* Google Analytics 4 */ ?>
<?php
    endif;
    

    /* // REF [53*] Page redirect */
    if($page_redirect){ include ('page.redirect.script.inc.php'); }
?>