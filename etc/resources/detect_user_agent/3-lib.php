<?php
// (A) INCLUDE MOBILE DETECT LIBRARY
// DOWNLOAD FROM - http://mobiledetect.net/
require "mobile-detect/Mobile_Detect.php";
$detect = new Mobile_Detect;

// (B) DETECTION ENGINE
if ($detect->isMobile() || $detect->isTablet()) {
  echo "MOBILE OR TABLET DEVICE";

  if( $detect->isiOS() ){ echo "IOS"; }
  if( $detect->isAndroidOS() ){ echo "ANDROID"; }
} else { echo "DESKTOP"; }