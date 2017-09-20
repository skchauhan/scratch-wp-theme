<?php 
	/*Template Name: Services*/
	get_header();
 ?>

 <!-- services -->
	<div class="services">
		<div class="container">
			<div class="py_agile_services_grids">
				<?php 	
		        	$services = new WP_Query(array( 'post_type'=> 'service' ));
		        	if($services->have_posts()) :        		
		        		while ($services->have_posts()) :
		        			$services->the_post();
		        ?>
						<div class="col-md-4 py_agile_services_grid">
							<div class="agile_services_grid">
								<div class="hover06 column">
									<div>
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class'=>'img-responsive')); ?></a>
										</figure>
									</div>
								</div>
								<div class="agile_services_grid_pos">
									<i class="fa fa-<?php echo get_post_meta(get_the_ID(), 'icon_class', true); ?>" aria-hidden="true"></i>
								</div>
							</div>
							<h4><?php the_title(); ?></h4>
							<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
						</div>

				<?php	endwhile;
		        	endif;
					wp_reset_postdata();		        	
		        ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->

 <?php 
	 get_footer();
?>