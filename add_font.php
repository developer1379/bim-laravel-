<?php
$fontLink = "\n<!-- Google Fonts -->\n<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">\n";

$headFiles = [
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\head_links.blade.php',
    'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\head_links1.blade.php'
];

foreach ($headFiles as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        if (strpos($content, 'fonts.googleapis') === false) {
            file_put_contents($file, $fontLink, FILE_APPEND);
        }
    }
}

$cssFile = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
if (file_exists($cssFile)) {
    $content = file_get_contents($cssFile);
    
    // Add global body font family at the top of the file
    $globalCss = "body { font-family: 'Poppins', sans-serif !important; }\n";
    $content = $globalCss . $content;
    
    // Replace any existing 'Inter' font family references
    $content = str_replace("'Inter', 'Segoe UI', sans-serif", "'Poppins', sans-serif", $content);
    $content = str_replace("'Inter', sans-serif", "'Poppins', sans-serif", $content);
    
    file_put_contents($cssFile, $content);
}
echo "Done";
