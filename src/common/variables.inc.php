<?php
    $url = "http://wwwsitecomar"; //No debe llevar barra final
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $urlFB = "https://www.facebook.com/usuario";
    $urlIG = "https://www.instagram.com/usuario";
    $urlLI = "https://www.linkedin.com/usuario";
    $urlWA = "https://api.whatsapp.com/send?phone=5491100001111";
?>