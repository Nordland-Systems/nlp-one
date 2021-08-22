<div class="footer">
    <div class="footer_icon">
        <a href="/"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></a>
    </div>
    <div class="footer_menu_container">
        <?php wp_nav_menu( array( 
            'theme_location' => 'footer-menu', 
            'container_class' => 'footer_menu' ) ); 
        ?>
    </div>
</div>
</div>
<?php wp_footer(); ?>