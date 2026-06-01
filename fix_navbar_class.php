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
        
        // Add navbar class back to the wrapper div
        $content = str_replace('<div class="d-flex justify-content-center align-items-center">', '<div class="navbar d-flex justify-content-center align-items-center">', $content);
        $content = str_replace('<div class="d-flex justify-content-center align-items-center py-1 bg-dark">', '<div class="navbar d-flex justify-content-center align-items-center py-1 bg-dark">', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
