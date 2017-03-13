<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
	<div class="eight columns" id="posts">
        <h2>Posts</h2>
    		<?php if ( have_posts() ) : ?>

    			<?php
    			// The Loop
    			while ( have_posts() ) : the_post();?>
    			<!-- data context -->
                    <div id="individual">
                        <h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h3>
                        <h4><?php the_time('F j, Y'); ?></h4>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" id="morepostspage">Read More</a>
                    </div>
    			<?php endwhile; ?> <!-- End Loop -->
            <?php else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
	</div>
    <div class="four columns" id="postside">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
