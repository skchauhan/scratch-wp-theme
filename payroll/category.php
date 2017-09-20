<?php 
	get_header();
?>


<!-- services -->
	<div class="services">
		<div class="container">
			<div class="py_agile_services_grids">
			<?php 
				if(have_posts()) :
					while (have_posts()) {
						the_post();
			?>
				<div class="col-md-4 py_agile_services_grid">
					<div class="agile_services_grid">
						<div class="hover06 column">
							<div>
								<figure>
									<?php the_post_thumbnail('', array('class'=>'img-responsive')); ?>
								</figure>
							</div>
						</div>						
					</div>
					<h4><?php the_title(); ?></h4>
					<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
				</div>

			<?php				
				}
				endif;
			 ?>

			</div>
		</div>
	</div>

<?php
	get_footer();
?>