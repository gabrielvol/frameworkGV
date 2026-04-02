<?php
    function asset_versioned(string $path, string $dir_env = ''): string
    {
        $fullPath = $_SERVER['DOCUMENT_ROOT'] . $dir_env . $path;

        $version = file_exists($fullPath) ? filemtime($fullPath) : time();

        return $dir_env . $path . '?v=' . $version;
    }
?>