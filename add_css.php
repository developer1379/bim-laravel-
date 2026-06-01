<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\head_links.blade.php';
$cssLink = "\n<link rel=\"stylesheet\" href=\"{{ asset('css/main-site.css') }}\">\n";
file_put_contents($file, $cssLink, FILE_APPEND);

$file2 = 'C:\\xampp\\htdocs\\bim-laravel\\resources\\views\\includes\\head_links1.blade.php';
if(file_exists($file2)){
    $content2 = file_get_contents($file2);
    if(strpos($content2, 'main-site.css') === false){
        file_put_contents($file2, $cssLink, FILE_APPEND);
    }
}
echo "Done";
