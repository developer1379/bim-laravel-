<?php
$files = [
    'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\components\\department-navbar.blade.php',
    'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_bba.blade.php',
    'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\inner_mba.blade.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Fix syntax error and apply modern class
        $pattern1 = '/<a id="Repeater_scroll_HyperLink1_0"[^>]*>(\s*<span(?:>[^<]+<\/span>|[^<]+)*Admission in 2026-2027)/is';
        $content = preg_replace($pattern1, '<a id="Repeater_scroll_HyperLink1_0" class="modern-admission-btn text-decoration-none me-5" href="#">$1', $content);
        
        $content = preg_replace('/<a class="blink text-light w-txt-14 fw-bold "[^>]*>\s*Admission in 2026-2027\s*<\/a>/is', '<a class="modern-admission-btn text-decoration-none me-5" href="#">Admission in 2026-2027</a>', $content);
        
        file_put_contents($file, $content);
    }
}
echo "Done";
