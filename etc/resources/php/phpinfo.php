<?php
    echo '<p>is_writable(sys_get_temp_dir(): <pre>';
    var_dump(is_writable(sys_get_temp_dir()));
    echo '</pre></p>';
    
    echo '<p>stream_resolve_include_path(sys_get_temp_dir()): <pre>';    
    var_dump(stream_resolve_include_path(sys_get_temp_dir()));    
    echo '</pre></p>';
    
    echo '<p>stream_resolve_include_path("phpinfo.php"): <pre>';    
    var_dump(stream_resolve_include_path("phpinfo.php"));    
    echo '</pre></p>';
    
    echo '<p>Current PHP version: <pre>'. phpversion() . '</pre></p>';

    phpinfo();
    
?>