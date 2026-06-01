<?php
$cssFile = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
if (file_exists($cssFile)) {
    $content = file_get_contents($cssFile);
    
    // Add comprehensive responsive rules for different screen sizes
    $responsiveCSS = "
/* ========================================
   RESPONSIVE COMPACT STYLES (MacBook & Laptop Fix)
   ======================================== */

/* For screens between 992px - 1280px (small laptops) */
@media (min-width: 992px) and (max-width: 1280px) {
    /* Topbar */
    .modern-topbar .logo a { font-size: 12px !important; }
    
    /* Main navbar links */
    .navbar > ul > li > a,
    #navbar > ul > li > a { 
        padding: 5px 5px !important; 
        font-size: 10.5px !important; 
        letter-spacing: 0px !important;
    }

    /* Middle branding section */
    .middle-branding h2, .w-tsh { font-size: 1.3rem !important; }
    .middle-branding h5 { font-size: 0.9rem !important; }
    .middle-branding h6 { font-size: 0.75rem !important; }
    .w-logo { max-width: 70px !important; }
    .middle .container, .middle .py-4 { padding-top: 12px !important; padding-bottom: 12px !important; }

    /* Portal hero hero section */
    .portal-hero-section { padding: 20px 0 !important; }
}

/* For screens between 1281px - 1440px (MacBook range) */
@media (min-width: 1281px) and (max-width: 1440px) {
    .navbar > ul > li > a,
    #navbar > ul > li > a { 
        padding: 6px 6px !important; 
        font-size: 11px !important;
    }
    
    .middle-branding h2, .w-tsh { font-size: 1.5rem !important; }
    .w-logo { max-width: 80px !important; }
    .middle .container, .middle .py-4 { padding-top: 14px !important; padding-bottom: 14px !important; }
}

/* Fix second-line overflow - force all nav items on one row */
@media (min-width: 992px) {
    #header .navbar ul {
        flex-wrap: nowrap !important;
        white-space: nowrap;
    }
    #header .navbar > ul > li > a {
        white-space: nowrap;
    }
}
";

    // Append to end of CSS file
    $content .= $responsiveCSS;
    file_put_contents($cssFile, $content);
}
echo "Done";
