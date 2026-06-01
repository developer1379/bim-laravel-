<?php
$files = glob(__DIR__ . '/resources/views/includes/inner_*.blade.php');
$files[] = __DIR__ . '/resources/views/includes/navbar1.blade.php';

foreach ($files as $f) {
    if (!file_exists($f)) continue;
    $c = file_get_contents($f);
    $c = str_replace("url('Index')", "url('/')", $c);
    $c = str_replace("url('../Index')", "url('/')", $c);
    $c = str_replace("url('../index')", "url('/')", $c);
    $c = str_replace("url('../mba')", "url('mba')", $c);
    $c = str_replace("url('../bgi')", "url('bgi')", $c);
    file_put_contents($f, $c);
    echo "Fixed: $f\n";
}
