<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111608099-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111608099-4');
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="loader">
    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="110" viewBox="0 0 140 110">
    <g id="Groupe_127" data-name="Groupe 127" transform="translate(-18.234 -25.479)">
        <path id="Tracé_623" data-name="Tracé 623" d="M34.382,37.582H1.864A5.87,5.87,0,0,1-3.539,34,5.827,5.827,0,0,1-4,31.718V5.864A5.845,5.845,0,0,1-2.282,1.717,5.845,5.845,0,0,1,1.864,0H34.382a5.859,5.859,0,0,1,5.864,5.864V31.718a5.859,5.859,0,0,1-5.864,5.864ZM22.521,1.6a15.785,15.785,0,0,0-8.867,2.708,15.905,15.905,0,0,0-5.746,6.977A15.838,15.838,0,0,0,9.37,26.325a15.905,15.905,0,0,0,6.977,5.746,15.838,15.838,0,0,0,15.04-1.462,15.905,15.905,0,0,0,5.746-6.977,15.838,15.838,0,0,0-1.462-15.04,15.905,15.905,0,0,0-6.977-5.746A15.76,15.76,0,0,0,22.521,1.6Z" transform="translate(69.776 61.509)" fill="#fff"/>
        <path id="Tracé_621" data-name="Tracé 621" d="M372.795,63.6l35.989-38.118H424.4Z" transform="translate(-266.169)" fill="#fff"/>
        <path id="Tracé_622" data-name="Tracé 622" d="M73.64,309,37.426,347.363H22.234Z" transform="translate(-4 -211.885)" fill="#fff"/>
    </g>
    </svg>
</div>
<div id="page" class="site">

    <header class="site-header">
        <div class="site-header__container">
            <div class="site-header__logo-container">
                <a href="<?php echo get_site_url(); ?>" class="site-header__logo"></a>
            </div>
            <div class="site-header__burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
            <?php 
            wp_nav_menu( 
                array( 
                    'theme_location' => 'main', 
                    'container' => 'ul',
                    'menu_class' => 'site-header__navigation',
                ) 
            ); 
            ?>    
        </div>
    </header>