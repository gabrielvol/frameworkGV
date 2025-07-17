<?php
// (A) CHECK IF "MOBILE" EXISTS IN USER AGENT
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
echo $isMob
  ? "Using a mobile device"
  : "Not a mobile device" ;
