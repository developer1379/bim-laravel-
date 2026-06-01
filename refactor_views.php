<?php

$dir = __DIR__ . '/resources/views/pages';
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

foreach ($files as $file) {
    if ($file->isDir()) continue;
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);

    if (stripos($content, '<html') !== false) {
        $newContent = refactor($content);
        file_put_contents($file, $newContent);
        echo "Refactored: " . $file->getPathname() . "\n";
    }
}

function refactor($content) {
    // Find includes
    preg_match('/(?:@include\([\'"]|<\?php echo view\([\'"])(includes\.(?:head_links\w*|inner_[^\'"]+)|pages\.[^\'"]+)[\'"]\)(?:; \?>)?/is', $content, $headMatches);
    $headPartial = $headMatches[1] ?? 'partials.site.head';

    preg_match('/(?:@include\([\'"]|<\?php echo view\([\'"])(includes\.(?:navbar\w*|inner_\w+)|pages\.[^\'"]+)[\'"]\)(?:; \?>)?/is', $content, $headerMatches);
    $headerPartial = $headerMatches[1] ?? 'partials.site.header';

    preg_match('/(?:@include\([\'"]|<\?php echo view\([\'"])(includes\.(?:footer\w*)|pages\.[^\'"]+)[\'"]\)(?:; \?>)?/is', $content, $footerMatches);
    $footerPartial = $footerMatches[1] ?? 'partials.site.footer';

    preg_match('/(?:@include\([\'"]|<\?php echo view\([\'"])(includes\.(?:body_links\w*|scripts\w*)|pages\.[^\'"]+)[\'"]\)(?:; \?>)?/is', $content, $scriptsMatches);
    $scriptsPartial = $scriptsMatches[1] ?? 'partials.site.scripts';

    // Extract styles from head
    $styleContent = '';
    if (preg_match_all('/<style[^>]*>(.*?)<\/style>/is', $content, $styleMatches)) {
        foreach ($styleMatches[0] as $style) {
            $styleContent .= $style . "\n";
        }
    }

    // Extract body
    if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $bodyMatches)) {
        $bodyContent = $bodyMatches[1];
    } else {
        $bodyContent = preg_replace('/<html.*?>.*?<body[^>]*>/is', '', $content);
        $bodyContent = preg_replace('/<\/body>.*?<\/html>/is', '', $bodyContent);
    }

    // Remove includes
    $bodyContent = preg_replace('/@include\([\'"].*?[\'"]\)/is', '', $bodyContent);
    $bodyContent = preg_replace('/<\?php echo view\([\'"].*?[\'"]\); \?>/is', '', $bodyContent);
    $bodyContent = preg_replace('/<!-- Carousel Start -->/is', '', $bodyContent);
    
    $bodyContent = trim($bodyContent);

    // Build the new file content
    $newFile = "@extends('layouts.site', [\n";
    $newFile .= "    'headPartial' => '$headPartial',\n";
    $newFile .= "    'headerPartial' => '$headerPartial',\n";
    $newFile .= "    'footerPartial' => '$footerPartial',\n";
    $newFile .= "    'scriptsPartial' => '$scriptsPartial',\n";
    $newFile .= "])\n\n";

    if (!empty($styleContent)) {
        $newFile .= "@push('head')\n";
        $newFile .= trim($styleContent) . "\n";
        $newFile .= "@endpush\n\n";
    }

    $newFile .= "@section('content')\n";
    $newFile .= $bodyContent . "\n";
    $newFile .= "@endsection\n";

    return $newFile;
}
