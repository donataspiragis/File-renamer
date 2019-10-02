<?php
$path    = __DIR__.'/pics';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));

$count = 1;
foreach ($files as $key => $val) {
    if(preg_match('/\.jpg$/', $val)) {
    rename($path.'/'.$val, $path.'/'.($count++).'.jpg');
}
}