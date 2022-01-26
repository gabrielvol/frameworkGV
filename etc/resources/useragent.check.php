<?php
// Fix Api Whatsapp on Desktops
// Dev: Jean Livino

$iphone     = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android    = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre    = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry      = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod       = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true){
    $link1 = "https://api.whatsapp.com/send?phone=+5491100009999&text=Hola. Estoy interesado en que me contacten. Gracias";
} else {
    $link1 = "https://web.whatsapp.com/send?phone=+5491177770000&text=Hola. Estoy interesado en que me contacten. Gracias";
}
?>