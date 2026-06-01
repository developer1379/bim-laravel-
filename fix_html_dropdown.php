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
        
        // Use regex to wrap the img and the a tag in a d-flex span
        $pattern = '/(<img[^>]*src="[^"]*new\.gif"[^>]*>)\s*(?:&nbsp;)?\s*(<a[^>]*class="[^"]*modern-admission-btn[^"]*"[^>]*>.*?<\/a>)/is';
        
        $content = preg_replace($pattern, '<span class="d-flex align-items-center me-4">$1$2</span>', $content);
        
        // Also remove margin-right: 6px from the img and replace it with me-2 class or just let flex gap handle it
        $content = preg_replace('/style="height:10px;\s*width:26px;\s*margin-right:\s*6px;"/i', 'style="height:12px; width:auto; margin-right: 6px;"', $content);
        $content = preg_replace('/style="height:12px;\s*margin-right:8px;"/i', 'style="height:12px; width:auto; margin-right: 6px;"', $content);
        $content = preg_replace('/style="height:7px;width:22px;"/i', 'style="height:12px; width:auto; margin-right: 6px;"', $content);
        
        // Remove 'me-5' from modern-admission-btn since the wrapper has me-4
        $content = str_replace('modern-admission-btn text-decoration-none me-5', 'modern-admission-btn text-decoration-none', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
