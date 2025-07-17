<?php
    
// REF [47]
$userAgent_android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$userAgent_blackBerry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$userAgent_iPad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$userAgent_iPhone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$userAgent_iPod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$userAgent_mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
$userAgent_webOS = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$userAgent_tablet = strpos($_SERVER["HTTP_USER_AGENT"],"Tablet");

if($topbar_hide_mobile == 1){
    if ($userAgent_android || $userAgent_blackBerry || $userAgent_iPad || $userAgent_iPhone || $userAgent_iPod || $userAgent_mobile || $userAgent_webOS || $userAgent_tablet == true){
        echo '<div class="pretopbar"></div>';
    }
}

if ($userAgent_android || $userAgent_blackBerry || $userAgent_iPad || $userAgent_iPhone || $userAgent_iPod || $userAgent_mobile || $userAgent_webOS || $userAgent_tablet == true){
    $link1 = "https://api.whatsapp.com/send?phone=+5491100009999&text=Hola. Estoy interesado en que me contacten. Gracias";
} else {
    $link1 = "https://web.whatsapp.com/send?phone=+5491177770000&text=Hola. Estoy interesado en que me contacten. Gracias";
}