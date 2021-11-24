<html>
<head>
    <title>Nordland-Park</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
    </script>

    <link href="/./screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="/./print.css" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
        <link href="/./ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body>
<?php wp_head(); ?>
<div class="topbar">
    <?php wp_nav_menu( array( 
        'theme_location' => 'topbar-menu', 
        'container_class' => 'topbar_menu' ) ); 
    ?>
    <div class="topbar_socials">
        <a href="https://twitter.com/NordlandPark"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/twitter_icon.png"></a>
        <a href="https://discord.gg/V3nCVXn"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/discord_icon.png"></a>
    </div>
    <div class="topbar_logo">
        <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="8192" height="4500" viewBox="0 0 2167.467 1190.625" xmlns:v="https://vecta.io/nano"><path d="M1083.734 17.56L929.232 893.569 605.175 708.651l226.593 323.608-811.317 138.689h859.872c.015-112.303 91.108-203.436 203.411-203.41 112.274.015 203.396 91.136 203.41 203.41h859.873L1335.7 1032.259l226.593-323.608-324.095 184.919zm-80.232 251.908c-454.721 48.972-844.656 419.642-878.927 867.78 66.464-378.489 457.721-714.161 862.624-775.32zm160.464 0l16.303 92.46c399.521 65.641 797.54 400.815 863.682 775.317-33.961-444.089-431.023-813.807-879.985-867.777zm-80.232 739.245c-89.619-.021-154.483 72.615-154.502 162.234h85.157c.01-41.003 28.342-69.339 69.345-69.344 41.003.006 69.339 28.341 69.345 69.344h85.119c-.019-89.59-64.873-162.215-154.464-162.234z" fill="#fff"/></svg>
        </a>
    </div>
</div>

<div id="mainbar" class="mainbar">
    <div class="mobile_menu_button" onclick="menuButtonToggle(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <div class="header">
        <div class="header_logo">
            <a href="/"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></a>
        </div>
        <?php wp_nav_menu( array( 
            'theme_location' => 'main-menu', 
            'container_class' => 'main_menu' ) ); 
        ?>
    </div>
</div>


<div id="mobile_menu_container" class="mobile_menu_container">
    <?php wp_nav_menu( array( 
        'theme_location' => 'mobile-menu', 
        'container_class' => 'mobile_menu' ) ); 
    ?>
    <div class="social_buttons">
        <a href="https://twitter.com/NordlandPark"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/twitter_icon.png"></a>
        <a href="https://discord.gg/V3nCVXn"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/discord_icon.png"></a>
    </div>
</div>