<?php
$file = 'c:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\navbar1.blade.php';
$content = file_get_contents($file);

// 1. Remove style block
$content = preg_replace('/<style>.*?<\/style>/is', '', $content, 1);

// 2. Replace topbar
$content = preg_replace(
    '/<div\s+class="topbar d-none d-md-block"\s+style="[^"]*">\s*/is',
    "<div class=\"topbar d-none d-md-block modern-topbar\">\n    ",
    $content,
    1
);
$content = str_replace(
    '<nav class="navbar navbar-expand-lg py-1" style="padding:0px 0px 0px 5px !important">',
    '<nav class="navbar navbar-expand-lg py-1">',
    $content
);
$content = str_replace(
    '<div class="container-fluid" style="padding:0px 0px !important">',
    '<div class="container-fluid">',
    $content
);

// 3. Replace middle section
$content = str_replace(
    '<section class="middle shadow-sm" style="background-color: #ffffff; border-bottom: 1px solid rgba(0,0,0,0.05);">',
    '<section class="middle modern-middle-section shadow-sm">',
    $content
);
$content = str_replace(
    '<h3 class="w-tsh text-danger fw-bold mb-1" style="font-size: 1.6rem; letter-spacing: 0.5px;">',
    '<h3 class="modern-brand-title mb-1">',
    $content
);
$content = str_replace(
    '<p class="text-muted mb-0" style="font-size: 0.9rem; font-weight: 500;">',
    '<p class="modern-brand-sub mb-0">',
    $content
);

// 4. Replace header section
$content = str_replace(
    '<header id="header" class="d-flex align-items-center py-2" style="padding:0px 0px 0px 5px !important">',
    '<header id="header" class="d-flex align-items-center py-2">',
    $content
);

file_put_contents($file, $content);
echo "Done";
