        <footer>
            <div class="row">
                <div class="twelve columns">
                        <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                            <?php bloginfo('name'); ?></a></h1>
                        <h3><?php bloginfo('description'); ?></h3>
                    <div id="searchbar-footer"
                        <?php dynamic_sidebar('footer-one'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <nav>
                        <?php wp_nav_menu(array(
                                'sort_column'        =>  'menu_order',
                                'container_class'    =>  'blank-menu-header'
                            ));
                        ?>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <h5>Website Designed by Efren Vasquez</h5>
                </div>
            </div>
        </footer>

    <?php wp_footer(); ?>
</body>
</html>
