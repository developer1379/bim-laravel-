<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
$content = file_get_contents($file);

$pattern = '/\/\*\s*Compact Admission Button in Sub-navbar\s*\*\/.*/is';
$content = preg_replace($pattern, '', $content);

$new_css = file_get_contents('C:\\xampp\\htdocs\\bim-laravel\\public\\css\\admission.css');
$content .= "\n" . $new_css;

file_put_contents($file, $content);
echo "Done";
