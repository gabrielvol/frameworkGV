<?php
    // Test if gettext extension is installed with php

    if (!function_exists("gettext")) {
        echo 'gettext is not installed';
    } else {
        echo 'gettext is supported';
    }
?>