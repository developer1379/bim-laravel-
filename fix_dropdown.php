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
        
        // Remove d-flex from the dropdown li to fix dropdown list rendering
        $content = str_replace('<li class="dropdown d-flex align-items-center">', '<li class="dropdown">', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
