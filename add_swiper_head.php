<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\head_links1.blade.php';
$content = file_get_contents($file);
if (strpos($content, 'swiper-bundle.min.js') === false) {
    $content .= "\n<!-- Swiper JS -->\n<script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>\n";
    file_put_contents($file, $content);
}
echo "Done";
