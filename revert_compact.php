<?php
$cssFile = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
if (file_exists($cssFile)) {
    $content = file_get_contents($cssFile);
    
    // Remove the MacBook specific block
    $content = preg_replace('/\/\* MacBook specific compactness \*\/.*?@media \(max-width: 375px\) \{/is', '@media (max-width: 375px) {', $content);
    
    // Remove the comprehensive responsive block
    $content = preg_replace('/\/\* ={10,}\s*RESPONSIVE COMPACT STYLES.*$/is', '', $content);
    
    // Also revert padding change on navbar links
    $content = str_replace('padding: 6px 7px; font-size: 11px;', 'padding: 8px 10px; font-size: 13px;', $content);
    
    file_put_contents($cssFile, $content);
}
echo "Done";
