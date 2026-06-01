<?php
$file = 'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\pages\\uncategorized\\index.blade.php';
$content = file_get_contents($file);

// Restore height: auto to slides so they keep their CSS padding
$content = str_replace('<li class="swiper-slide">', '<li class="swiper-slide" style="height: auto;">', $content);

// Update Swiper config for continuous linear scroll
$old_js = '        var noticeSwiper = new Swiper(".noticeSwiper", {
            direction: "vertical",
            slidesPerView: 3,
            spaceBetween: 15,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            grabCursor: true,
        });';

$new_js = '        var noticeSwiper = new Swiper(".noticeSwiper", {
            direction: "vertical",
            slidesPerView: "auto",
            loop: true,
            speed: 2500,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            grabCursor: true,
        });';
        
$content = str_replace($old_js, $new_js, $content);
file_put_contents($file, $content);
echo "Done";
