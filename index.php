<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <link rel="stylesheet" href="/./screen.css" media="screen, projection" type="text/css" />
        <link rel="stylesheet" href="/./print.css" media="print" type="text/css" />
        <!--[if IE]>
            <link href="/./ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>
    <body>
        <?php wp_head(); ?>
        <?php wp_footer(); ?>
        <?php get_header(); ?>

        <!--HEADER-->
        <div class="single_page">

            <div class="single_page_title">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
            </div>
            

            <!--CONTENT-->
            
            
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>

            <?php endwhile; ?>
            
            
            <!--NEXT/PREV NAVIGATION-->
            <?php
            if ( get_next_posts_link() ) {
            next_posts_link();
            }
            ?>
            <?php
            if ( get_previous_posts_link() ) {
            previous_posts_link();
            }
            ?>
            
            <?php else: ?>
            
            <p>No posts found. :(</p>
            
            <?php endif; ?>
        </div>
        
        <?php get_footer(); ?>
    </body>
</html>