<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="services">
		<div class="container">
			<div class="py_agile_services_grids error_page">

					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
			</div>
		</div>
	</div>		
				

<?php get_footer(); ?>
