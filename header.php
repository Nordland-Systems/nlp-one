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
        <a href="https://www.instagram.com/nordlandpark/"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/insta_icon.png"></a>
        <a href="https://www.youtube.com/channel/UCGzoVFbz2ILFBaJpZNzRBJA"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/youtube_icon.png"></a>
        <a href="https://twitter.com/NordlandPark"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/twitter_icon.png"></a>
        <a href="https://discord.gg/V3nCVXn"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/discord_icon.png"></a>
        <a href="mailto:info@nordland-park.de"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/mail_icon.png"></a>
    </div>
    <div class="topbar_logo">
        <a href="/"><img src="<?php echo get_bloginfo('template_url') ?>/images/nlpGmbhIcon.png"></a>
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
        <a href="https://www.instagram.com/nordlandpark/"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/insta_icon.png"></a>
        <a href="https://www.youtube.com/channel/UCGzoVFbz2ILFBaJpZNzRBJA"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/youtube_icon.png"></a>
        <a href="https://twitter.com/NordlandPark"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/twitter_icon.png"></a>
        <a href="https://discord.gg/V3nCVXn"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/discord_icon.png"></a>
        <a href="mailto:info@nordland-park.de"><img class="social_button" src="<?php echo get_bloginfo('template_url') ?>/images/mail_icon.png"></a>
    </div>
</div>