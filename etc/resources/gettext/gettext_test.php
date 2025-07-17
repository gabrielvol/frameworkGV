<?php
    // Test if gettext extension is installed with php

    if (!function_exists("gettext")) {
        echo 'gettext is not installed';
        exit(1);
    } else {
        echo 'gettext is supported';
        exit(0);
    }
?>