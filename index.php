<?php
/*
theme_name: Djebel Blank
theme_uri: https://djebel.com/themes/blank
description: blank theme
version: 1.0.0
tags: sample, theme, blog, site
stable_version: 1.0.0
min_php_ver: 5.6
min_dj_app_ver: 1.0.0
tested_with_dj_app_ver: 1.0.0
author_name: Svetoslav Marinov (Slavi)
company_name: Orbisius
author_uri: https://orbisius.com
text_domain: djebel-app-theme-blank
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Minimal CSS - Clean, centered design */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fafafa;
            min-height: 100vh;
        }
        
        .dj-app-content-wrapper {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .dj-app-content {
            flex: 1;
            background: white;
            padding: 3rem 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
        }
        
        .dj-app-page-content {
            max-width: 100%;
        }
        
        .dj-app-page-content h1,
        .dj-app-page-content h2,
        .dj-app-page-content h3,
        .dj-app-page-content h4,
        .dj-app-page-content h5,
        .dj-app-page-content h6 {
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 600;
        }
        
        .dj-app-page-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .dj-app-page-content h2 {
            font-size: 2rem;
        }
        
        .dj-app-page-content h3 {
            font-size: 1.5rem;
        }
        
        .dj-app-page-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .dj-app-page-content ul,
        .dj-app-page-content ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }
        
        .dj-app-page-content li {
            margin-bottom: 0.5rem;
        }
        
        .dj-app-page-content a {
            color: #3498db;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: border-color 0.2s ease;
        }
        
        .dj-app-page-content a:hover {
            border-bottom-color: #3498db;
        }
        
        .dj-app-footer {
            text-align: center;
            padding: 1rem 0;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .dj-app-content-wrapper {
                padding: 1rem 0.5rem;
            }
            
            .dj-app-content {
                padding: 2rem 1rem;
            }
            
            .dj-app-page-content h1 {
                font-size: 2rem;
            }
            
            .dj-app-page-content h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body class="dj-app-page-default">
    <div class="dj-app-content-wrapper">
        <main class="dj-app-content">
            <div class="dj-app-page-content">
                [djebel_page_content]
            </div>
        </main>
        <footer class="dj-app-footer">
            <div>[djebel_page_footer]</div>
        </footer>
    </div> <!-- /dj-app-content-wrapper -->
</body>
</html>
