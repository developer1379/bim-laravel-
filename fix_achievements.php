<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
if (file_exists($file)) {
    $content = file_get_contents($file);
    
    // Compact the section padding
    $content = str_replace('padding: 5rem 0;', 'padding: 2.5rem 0;', $content);
    
    // Compact the header title size
    $content = str_replace('font-size: 2.2rem;', 'font-size: 1.8rem;', $content);
    
    // Compact the image height
    $content = str_replace('height: 220px;', 'height: 150px;', $content);
    
    // Compact card content padding
    $content = str_replace('padding: 1.5rem;', 'padding: 1rem;', $content);
    
    // Compact card title font size
    $content = str_replace('font-size: 1.1rem;', 'font-size: 0.95rem;', $content);
    
    // Compact button
    $content = str_replace('padding: 8px 24px;', 'padding: 5px 14px;', $content);
    $content = str_replace('font-size: 0.95rem;', 'font-size: 0.85rem;', $content);
    
    file_put_contents($file, $content);
}
echo "Done";
