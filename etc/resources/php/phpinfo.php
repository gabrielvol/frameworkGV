<!doctype html>
<html lang="es-AR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style>
    p{
        margin: 0;
        color: #333;
    }
    pre{
        background-color: #ddd;
        margin: 4px 0 10px 20px!important;
        color: #333;
        padding: 4px;
        border-radius: 4px;
    }
    p:empty{
        display: none;
    }
</style>
</head>
<body>
<?php
    echo '<p>Current PHP version: <pre>'. phpversion() . '</pre></p>';
    
    echo '<p>is_writable(sys_get_temp_dir(): <pre>';
        var_dump(is_writable(sys_get_temp_dir()));
    echo '</pre></p>';
    
    echo '<p>stream_resolve_include_path(sys_get_temp_dir()): <pre>';    
        var_dump(stream_resolve_include_path(sys_get_temp_dir()));    
    echo '</pre></p>';
    
    echo '<p>stream_resolve_include_path("phpinfo.php"): <pre>';    
        var_dump(stream_resolve_include_path("phpinfo.php"));    
    echo '</pre></p>';
    
    if ( ini_get( 'allow_url_fopen' ) ) {
        echo '<p>allow_url_fopen is <pre>Enabled</pre></p>';
    } else {
        echo '<p>allow_url_fopen is <pre>Disabled</pre></p>';
    }

    phpinfo();    
?>
</body>
</html>