<?php
$files = [
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_bba.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_mba.blade.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Remove the inline <style> block
        $content = preg_replace('/<style>.*?<\/style>/is', '', $content);
        
        // Remove the dark bar at the bottom (Admission in 2026-2027)
        $content = preg_replace('/<div class=" container-fluid bg-dark pt-2">.*?<\/div>\s*<\/div>\s*<\/div>/is', '', $content);
        
        // Remove old scripts that might conflict
        $content = preg_replace('/<script>.*?<\/script>/is', '', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
