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

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body>
<?php wp_head(); ?>
<div class="header">
    <div class="header_logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
    </div>
    <div class="topnav">
        <ul>
            <a href=""><li>Start</li></a>
            <a href=""><li>Über uns</li></a>
        </ul>
    </div>
</div>