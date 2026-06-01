<?php
$file = 'C:\\xampp\\htdocs\\bim-laravel\\public\\css\\main-site.css';
$content = file_get_contents($file);

// Remove the existing navbar styling
$pattern = '/\.navbar \{ padding: 0; \}.*?\/\* Middle Branding Area \*\//is';

$new_css = '.navbar { padding: 0; }
.navbar ul { margin: 0; padding: 0; list-style: none; display: flex; flex-wrap: wrap; }
.navbar a {
    display: flex; align-items: center; justify-content: space-between;
    padding: 12px 18px; font-size: 15px; font-weight: 600; letter-spacing: 0.5px;
    color: #ffffff; text-decoration: none; transition: background 0.3s ease;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    text-transform: uppercase;
}
/* First item border */
.navbar > ul > li:first-child > a { border-left: 1px solid rgba(255, 255, 255, 0.2); }

.navbar a i { margin-left: 6px; font-size: 14px; }

.navbar > ul > li > a:hover, .navbar > ul > li > .active {
    background: #a81111; /* Darker theme red */
    color: #ffffff;
}

/* Dropdown Menu UP Scholarship Style */
.navbar .dropdown ul {
    display: block; position: absolute; top: 100%; left: 0; padding: 0;
    background: #ffffff; visibility: hidden; opacity: 0;
    transition: opacity 0.2s ease, visibility 0.2s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); border-radius: 0; z-index: 999;
    min-width: 260px; border-top: 3px solid #cc1616;
}
.navbar .dropdown:hover > ul { opacity: 1; visibility: visible; }
.navbar .dropdown ul li { position: relative; border-bottom: 1px solid #eeeeee; }
.navbar .dropdown ul li:last-child { border-bottom: none; }
.navbar .dropdown ul a {
    color: #333333; padding: 12px 16px; font-size: 14px; font-weight: 600; text-transform: uppercase;
    transition: background 0.2s ease; border-right: none;
}
.navbar .dropdown ul a:hover {
    background: #cc1616; color: #ffffff; padding-left: 16px;
}
.navbar .dropdown ul .dropdown ul { top: 0; left: 100%; margin-left: 0; }
.navbar .dropdown ul .dropdown:hover > ul { transform: none; }
.dropdown-menu-left { left: auto !important; right: 100% !important; }

/* Middle Branding Area */';

$content = preg_replace($pattern, $new_css, $content);
file_put_contents($file, $content);
echo "Done";
