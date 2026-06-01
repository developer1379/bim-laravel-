<?php

$departments = [
    'bba' => 'Department of Business Administration (BBA)',
    'bca' => 'Department of Computer Applications (BCA)',
    'civil' => 'Department of Civil Engineering',
    'cse' => 'Department of Computer Science & Engineering',
    'ec' => 'Department of Electronics & Communication',
    'mba' => 'Department of Business Administration (MBA)',
    'mca' => 'Department of Computer Applications (MCA)',
    'me' => 'Department of Mechanical Engineering'
];

foreach ($departments as $dept => $title) {
    $file = __DIR__ . "/resources/views/pages/departments/{$dept}/{$dept}.blade.php";
    
    if (!file_exists($file)) {
        echo "File not found: $file\n";
        continue;
    }
    
    $content = file_get_contents($file);
    
    // Find everything between @section('content') and the end of file (or @endsection)
    $pattern = '/@section\(\'content\'\)(.*?)(@endsection)?$/is';
    
    // Use generic images but fall back to bba specific ones for bba
    $img1 = "images/1.jpg";
    $img2 = "images/2.jpg";
    $img3 = "images/3.jpg";
    
    if ($dept == 'bba') {
        $img1 = "images/bba_events/pic1.jpg";
        $img2 = "images/bba_events/pic2.jpg";
        $img3 = "images/bba_events/pic3.jpg";
    }

    $replacement = "@section('content')\n" .
                   "<x-department-hero title=\"{$title}\">\n" .
                   "    <div class=\"carousel-item active h-100\">\n" .
                   "        <img src=\"{{ asset('{$img1}') }}\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"Hero Image 1\">\n" .
                   "    </div>\n" .
                   "    <div class=\"carousel-item h-100\">\n" .
                   "        <img src=\"{{ asset('{$img2}') }}\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"Hero Image 2\">\n" .
                   "    </div>\n" .
                   "    <div class=\"carousel-item h-100\">\n" .
                   "        <img src=\"{{ asset('{$img3}') }}\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"Hero Image 3\">\n" .
                   "    </div>\n" .
                   "</x-department-hero>\n\n" .
                   "<x-department-social-cards />\n" .
                   "@endsection\n";
                   
    $newContent = preg_replace($pattern, $replacement, $content);
    
    file_put_contents($file, $newContent);
    echo "Refactored $dept.blade.php\n";
}
