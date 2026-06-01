<?php
$files = [
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\navbar1.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\components\\department-navbar.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_bba.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_mba.blade.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Remove the entire dark bar section containing the admission link for navbar1.blade.php
        $pattern = '/<div class="container-fluid bg-dark py-1">.*?<\/div>\s*<\/div>\s*<\/div>/is';
        $content = preg_replace($pattern, '', $content);
        
        // Remove it for the sub-navbars
        $pattern2 = '/<div class="navbar d-flex justify-content-center align-items-center py-1 bg-dark">.*?<\/ul>\s*<\/div>/is';
        $content = preg_replace($pattern2, '', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
