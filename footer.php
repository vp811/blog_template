        <footer class="row">
            <div class="four columns">
                    <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                        <?php bloginfo('name'); ?></a></h1>
                <?php dynamic_sidebar('footer-one'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('footer-two'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('footer-three'); ?>
            </div>
        </footer>

    </div><!-- End Footer Div-->
    <?php wp_footer(); ?>
</body>
</html>
