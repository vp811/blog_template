<?php
/* Template Name: 404 page (Not Found) */

get_header(); ?>

	<div class="row">
		<div class="eight columns">
            <div id="error-top">
                <h2>Page Not Found</h2>
    			<h3>This usually never happens, I swear!</h3>
    			<p>It looks like nothing was found at this location. Maybe try a search?</p>
    			<h3>Try searching for what you need:</h3>
    			<?php get_search_form(); ?>
            </div>
		</div>

		<div class="four columns" id="errorside">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
