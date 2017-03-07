<?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container">
    <section class="row">
        <div class="eight columns">

        <!-- BEGIN LOOP -->
        			<?php
            			if ( have_posts() ) {
            			    while ( have_posts() ) {
            			        the_post(); ?>
                                <div class="posts">
                                    <div class="background-post">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h4><?php the_date(); ?></h4>
                                    </div>
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    }
                                ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" id="more">Read More</a>
                                </div>
                            <?php

            			    } // end while
            			} // end if
        			?>
        <!-- END LOOP -->
        </div>
        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </section>
<!-- End Section -->
</div>
<?php get_footer(); ?>
