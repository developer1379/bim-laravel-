<?php
$file = 'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\index.blade.php';
$content = file_get_contents($file);

// 1. Restore the original HTML but use a CSS marquee class
$content = str_replace('<div class="swiper noticeSwiper" style="height: 100%; width: 100%;">', '<div class="css-marquee" style="height: 100%; width: 100%;">', $content);
$content = str_replace('<ul class="swiper-wrapper notice-list"', '<ul class="notice-list"', $content);
$content = str_replace('<li class="swiper-slide" style="height: auto;">', '<li>', $content);

// 2. Remove noticeSwiper JS initialization completely
$js_pattern = '/\s*\/\/\s*Initialize Vertical Notice Swiper.*?grabCursor:\s*true,\s*\}\);/is';
$content = preg_replace($js_pattern, '', $content);

file_put_contents($file, $content);
echo "Done";
