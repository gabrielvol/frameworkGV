<?php
    
// REF [47]
$android    = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$berry      = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipad       = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$iphone     = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod       = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$mobile     = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
$palmpre    = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$tablet     = strpos($_SERVER["HTTP_USER_AGENT"],"Tablet");

if($topbar_hide_mobile == 1){
    if ($android || $berry || $ipad || $iphone || $ipod || $mobile || $palmpre || $tablet == true){
        echo '<div class="pretopbar"></div>';
    }
}