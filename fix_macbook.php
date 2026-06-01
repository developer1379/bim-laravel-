<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
if (file_exists($file)) {
    $content = file_get_contents($file);
    
    // Reduce font size and padding for navbar links globally to fit perfectly on MacBooks
    $content = str_replace('padding: 8px 10px; font-size: 13px;', 'padding: 6px 7px; font-size: 11px;', $content);
    
    // Reduce the middle section padding to make it compact
    $content = str_replace('.middle .container { padding: 20px 0; }', '.middle .container { padding: 10px 0; }', $content);
    
    // Just in case it's not exactly that, add a specific media query for 1200px-1440px (MacBook range)
    $mediaQuery = "\n/* MacBook specific compactness */\n@media (max-width: 1440px) {\n    .navbar a { padding: 6px 7px; font-size: 11px; }\n    .w-head h2 { font-size: 1.4rem; }\n    .w-head h5 { font-size: 1rem; }\n    .w-head h6 { font-size: 0.8rem; }\n    .w-logo { max-width: 90px; }\n}\n";
    $content .= $mediaQuery;

    file_put_contents($file, $content);
}
echo "Done";
