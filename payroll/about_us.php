<?php 
/*Template Name: About us*/

	get_header();
?>
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="agileinfo_about_grids">
			<?php 
				if( have_posts() ) :
						while ( have_posts() ) :
							the_post();
			?>
					<div class="col-md-8 agileinfo_about_grid_left">	
						<div class="wthree_about_grid">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-4 agileinfo_about_grid_right">
						<?php the_post_thumbnail('', array('class'=>'img-responsive')); ?>
					</div>
				<?php				
						endwhile;
					endif;
			 	?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- about -->


<?php  
	get_footer();
?>