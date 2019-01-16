<?php
    $url = "http://wwwsitecomar";
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $urlTW = "https://www.twitter.com/";
    $urlFB = "https://www.facebook.com/usuario";
    $urlIG = "https://www.instagram.com/usuario";
    $urlLI = "https://www.linkedin.com/usuario";
    $urlWA = "https://api.whatsapp.com/send?phone=5491100001111";
    $urlEM = "mailto:correo@servidor.com";
    $urlGM = "https://goo.gl/maps/aaaaaaaaaaaa";
    
    $dateThisYear = (int)date('Y');
?>