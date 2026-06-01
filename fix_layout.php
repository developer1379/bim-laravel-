<?php
$files = [
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\components\\department-navbar.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_bba.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_mba.blade.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        $pattern = '/<div class="row">\s*<div class="md-4 col-lg-4 col-sm-4"><\/div>\s*<div class="md-4 col-lg-4 col-sm-4 navbar anc[^"]*">\s*<ul/is';
        $content = preg_replace($pattern, '<div class="d-flex justify-content-center align-items-center py-1 bg-dark"><ul', $content);
        
        $pattern2 = '/<\/ul>\s*<\/div>\s*<div class="md-4 col-lg-4 col-sm-4"><\/div>\s*<\/div>/is';
        $content = preg_replace($pattern2, '</ul></div>', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
