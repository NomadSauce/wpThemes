<footer>

    <div class="container text-muted text-center">
        <?php 
        wp_nav_menu(
            array(

                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar',

            )
        );
        ?>
    </div>
    
</footer>