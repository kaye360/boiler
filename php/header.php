<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo $pageTitle; ?> - Site Title</title>
    <meta name="title" content="<?php echo $pageTitle; ?>">
    <meta name="description" content="<?php echo $pageDescription; ?>">

    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="canonical" href="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="./img/site-icon.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="./img/site-icon.png">

    <link rel="stylesheet" href="./css/main.css">

    <script src="./js/main.js" defer></script>
</head>
<body>

<a href="#content" id="skip">Skip to content</a>



<div class="back-to-top-container">
    <div class="back-to-top">
        <a href="#top" class="back-to-top-link">
            <img src="./img/back-to-top.svg">
            Top
        </a>
    </div>
</div>


<header id="navbar">
<div id="top" class="navbar container">

    
    <a href="index.php" class="logo-link">
        <div class="logo-container">
            
            <div class="logo-img">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M0.861079 12.5625L22.0017 22.7754C22.5521 23.0379 23.2868 23.175 24.014 23.175C24.7411 23.175 25.4758 23.0379 26.0252 22.7754L47.1658 12.5625C48.2774 12.0268 48.2774 11.1504 47.1658 10.6125L26.0252 0.399643C25.4758 0.137143 24.7401 0 24.014 0C23.2879 0 22.5521 0.137143 22.0017 0.399643L0.861079 10.6125C-0.250568 11.1504 -0.250568 12.0246 0.861079 12.5625V12.5625Z" fill="white"/>
                    <path d="M47.1663 23.025C47.1663 23.025 43.3055 21.1628 42.7936 20.9121C42.2817 20.6614 42.1435 20.6753 41.6059 20.925C41.0683 21.1746 26.0129 28.4496 26.0129 28.4496C25.3782 28.7238 24.6928 28.8603 24.0016 28.8503C23.2766 28.8503 22.5398 28.7121 21.9904 28.4496C21.9904 28.4496 7.33441 21.3782 6.64686 21.0375C5.90255 20.6785 5.68836 20.6785 5.01044 21L0.833735 23.0121C-0.277912 23.5478 -0.277912 24.4253 0.833735 24.9621L21.9775 35.175C22.5269 35.4375 23.2627 35.5746 23.9888 35.5746C24.7149 35.5746 25.4506 35.4375 26.0011 35.175L47.1416 24.9643C48.2779 24.4371 48.2779 23.5628 47.1663 23.025V23.025Z" fill="white"/>
                    <path d="M47.167 35.4375C47.167 35.4375 43.3062 33.5754 42.7943 33.3214C42.2824 33.0675 42.1443 33.0846 41.6066 33.3343C41.069 33.5839 26.0265 40.875 26.0265 40.875C25.3917 41.1487 24.7063 41.2849 24.0152 41.2747C23.2902 41.2747 22.5534 41.1375 22.0029 40.875C22.0029 40.875 7.34693 33.8036 6.66045 33.4629C5.91078 33.0996 5.69659 33.0996 5.02297 33.4254L0.846257 35.4375C-0.266461 35.9732 -0.266461 36.8496 0.846257 37.3875L21.9868 47.6004C22.5362 47.8747 23.272 48 23.9981 48C24.7242 48 25.4599 47.8629 26.0093 47.6004L47.1542 37.3929C48.2787 36.8496 48.2787 35.9754 47.167 35.4375Z" fill="white"/>
                </svg>
            </div>

            <div class="site-title">
                Site Title
            </div>
            
        </div>
    </a>

    <nav class="top-nav">

        <button aria-label="Open Menu" class="nav-icon">
            <svg class="nav-icon-open" width="34" height="25" viewBox="0 0 34 25" fill="none">
                <line x1="2.5" y1="12.5" x2="31.5" y2="12.5" stroke="white" stroke-width="5" stroke-linecap="round"/>
                <line x1="2.5" y1="22.5" x2="31.5" y2="22.5" stroke="white" stroke-width="5" stroke-linecap="round"/>
                <line x1="2.5" y1="2.5" x2="31.5" y2="2.5" stroke="white" stroke-width="5" stroke-linecap="round"/>
            </svg>
        </button>

        <button aria-label="Close Menu" class="nav-icon">
            <svg class="nav-icon-close" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <line x1="25.041" y1="3.53553" x2="4.53492" y2="24.0416" stroke="white" stroke-width="5" stroke-linecap="round"/>
                <line x1="4.51405" y1="2.97919" x2="25.0201" y2="23.4853" stroke="white" stroke-width="5" stroke-linecap="round"/>
            </svg>
        </button>
            
        <ul class="nav-links">
            <li><a href="index.php" class="nav-link <?php echo ($page == 'home') ? 'nav-link-active' : ''; ?> ">Home</a></li>
            <li><a href="fonts.php" class="nav-link <?php echo ($page == 'fonts') ? 'nav-link-active' : ''; ?> ">Font Demo</a></li>
            <li><a href="about.php" class="nav-link <?php echo ($page == 'about') ? 'nav-link-active' : ''; ?> ">About</a></li>
            <li>
                <a href="#" class="nav-link nav-dropdown-link <?php echo ($page == 'link') ? 'nav-link-active' : ''; ?> ">More</a>
                <ul class="nav-links-submenu">
                    <li><a href="#" class="nav-sub-link">Link</a></li>
                    <li><a href="#" class="nav-sub-link">Link Link</a></li>
                    <li><a href="#" class="nav-sub-link">Link</a></li>
                    <li><a href="#" class="nav-sub-link">Link Link</a></li>
                    <li><a href="#" class="nav-sub-link">Link</a></li>
                </ul>
            </li>
            <li><a href="contact.php" class="nav-link-cta <?php echo ($page == 'contact') ? 'nav-link-active' : ''; ?> ">Contact</a></li>
        </ul>

        <ul class="nav-socials">
            <li><a href="#" class="nav-social-link"><img src="./img/social-icons/facebook.svg"></a></li>
            <li><a href="#" class="nav-social-link"><img src="./img/social-icons/instagram.svg"></a></li>
            <li><a href="#" class="nav-social-link"><img src="./img/social-icons/tiktok.svg"></a></li>
        </ul>

    </nav>
    
    
</div>
</header>






<main id="content">