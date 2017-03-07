<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns">

        <!-- BEGIN LOOP -->
        			<?php
            			if ( have_posts() ) {
            			    while ( have_posts() ) {
            			        the_post(); ?>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    }
                                ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read More</a>

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

<?php get_footer(); ?>
