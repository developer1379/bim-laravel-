<?php
$files = glob(__DIR__ . '/resources/views/includes/inner_*.blade.php');
// Also process navbar.blade.php and navbar1.blade.php if they follow the same structure? Let's check them manually first.

foreach ($files as $file) {
    $content = file_get_contents($file);

    // Skip if already refactored
    if (strpos($content, '<x-department-navbar>') !== false) {
        continue;
    }
    
    // Extract logo src and style
    // Pattern: <img src="{{ asset('../images/logo-ba.png') }}" class="img-fluid w-logo" style="max-width:165% !important;" />
    // Note: It might just be <img src="{{ asset('../Images/logo.png') }}" class="img-fluid w-logo" />
    $logoSrc = "{{ asset('../Images/logo.png') }}";
    $logoStyle = "";
    if (preg_match('/<img src="([^"]+)" class="img-fluid w-logo"([^>]*)>/i', $content, $matches)) {
        $logoSrc = $matches[1];
        if (preg_match('/style="([^"]+)"/i', $matches[2], $styleMatches)) {
            $logoStyle = $styleMatches[1];
        }
    }

    // Extract Title
    $title = "";
    if (preg_match('/<h2 class="w-tsh text-danger fw-bold">\s*(.*?)\s*<\/h2>/is', $content, $matches)) {
        $title = trim($matches[1]);
    }

    // Extract Subtitle
    $subtitle = "";
    if (preg_match('/<h5 class="w-tsh text-danger fw-bold">\s*(.*?)\s*<\/h5>/is', $content, $matches)) {
        $subtitle = trim($matches[1]);
    }

    // Extract the ul content inside the nav
    // The nav is like: <nav id="navbar" class="navbar">\s*<ul>...</ul>\s*</nav>
    $ulContent = "";
    if (preg_match('/<nav id="navbar" class="navbar">\s*<ul>(.*?)<\/ul>\s*<\/nav>/is', $content, $matches)) {
        $ulContent = $matches[1];
    } else if (preg_match('/<nav id="navbar" class="navbar">\s*(<ul>.*?)<\/nav>/is', $content, $matches)) {
        $ulContent = $matches[1];
        // strip outer ul
        if (preg_match('/^<ul>(.*)<\/ul>$/is', trim($ulContent), $ulMatches)) {
            $ulContent = $ulMatches[1];
        }
    }

    if (!$ulContent) {
        echo "Failed to extract ul from: $file\n";
        continue;
    }

    // Now construct the new content
    $newContent = "<x-department-navbar>\n";
    if ($logoSrc) {
        $newContent .= "    <x-slot name=\"logo\">$logoSrc</x-slot>\n";
    }
    if ($logoStyle) {
        $newContent .= "    <x-slot name=\"logoStyle\">$logoStyle</x-slot>\n";
    }
    if ($title) {
        $newContent .= "    <x-slot name=\"title\">$title</x-slot>\n";
    }
    if ($subtitle) {
        $newContent .= "    <x-slot name=\"subtitle\">$subtitle</x-slot>\n";
    }
    
    $newContent .= "\n    " . trim($ulContent) . "\n";
    $newContent .= "</x-department-navbar>\n";

    file_put_contents($file, $newContent);
    echo "Refactored: $file\n";
}

echo "Done refactoring inner navbars.\n";
