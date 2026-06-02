<?php
$dir = "/www/wwwroot/DownLoad-Php/download-php/apk";

$files = array_filter(scandir($dir), function($f) use ($dir) {
    return is_file($dir."/".$f);
});

usort($files, function($a,$b) use ($dir){
    return filemtime($dir."/".$b) - filemtime($dir."/".$a);
});

echo $files[1] ?? "";
?>