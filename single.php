<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns">
        <!-- BEGIN LOOP -->
        			<?php
        			if ( have_posts() ) {
        			    while ( have_posts() ) {
        			        the_post();
                            if ( has_post_thumbnail() ) { ?>
					            <div class="post-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
				            <?php } ?>
                                <div class="individual-post">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                            </div>
                                <div class="post-nav">
                                    <p> <?php previous_post_link(); ?></p>
                                    <p> <?php next_post_link(); ?></p>
                                </div>
                            </div>
                        <?php
        			    } // end while
        			} // end if
        			?>
        <!-- END LOOP -->
        </div>
        <div class="four columns" id="postside">
            <?php get_sidebar(); ?>
        </div>

    </section>
<!-- End Section -->

<?php get_footer(); ?>
