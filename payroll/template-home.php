<?php 
/*Template Name: Home Page */
	get_header();
?>
<?php echo do_shortcode('[rev_slider alias="slider 1"]'); ?>	
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-12 pyl_banner_bottom_left text-center">
				<h3>About Us</h3>
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
					  echo '<p>'.ot_get_option( 'about_us' ).'</p>';
					}
				?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- two-grids -->
	<div class="two-grids">
		<div class="col-md-6 py_two_grid_left">
			<?php 
				if ( function_exists( 'ot_get_option' ) ) {
				  $img_url = ot_get_option( 'quickbooks_support_image' );
			?>
				<img src="<?php echo($img_url); ?>" alt=" " class="img-responsive" />
			<?php } ?>	

			
		</div>
		<div class="col-md-6 py_two_grid_right">
			<?php 
				if ( function_exists( 'ot_get_option' ) ) {
				  echo '<p class="py_agile_para">'.ot_get_option( 'quickbooks_support' ).'</p>';
				}
			 ?>	
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //two-grids -->
<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="agile_head">Services</h3>			
			<?php 
				if ( function_exists( 'ot_get_option' ) ) {
				  echo '<p class="py_agile_para">'.ot_get_option( 'services_subtitle' ).'</p>';
				}
			 ?>			
			<div class="py_agile_services_grids py_agile_services_grid-sec">
			<?php 	
	        	$services = new WP_Query(array( 'post_type'=> 'service', 'posts_per_page' => 3 ));
	        	if($services->have_posts()) :
	        		$i = 0;
	        		while ($services->have_posts()) :
	        			$services->the_post();
	         ?>
				<div class="col-md-4 py_agile_services_grid">
				<a href="#">
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
					<h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
					<p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
				</a>
				</div>

			<?php 	$i++;
	        		endwhile;
	        	endif;
				wp_reset_postdata();		        	
	        ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- news -->
	<div class="news">
		<div class="container">
			<h3 class="agile_head">Testimonials</h3>
			<?php 
				if ( function_exists( 'ot_get_option' ) ) {
				  echo '<p class="py_agile_para">'.ot_get_option( 'testimonials_subtitle' ).'</p>';
				}
			 ?>	
			<div class="agileits_pylayouts_news_grids">
				<ul id="flexiselDemo1">	
					<?php 	
			        	$testimonials = new WP_Query(array( 'post_type'=> 'testimonial' ));
			        	if($testimonials->have_posts()) :
			        		$i = 0;
			        		while ($testimonials->have_posts()) :
			        			$testimonials->the_post();
			         ?>
					<li>
						<div class="agileits_pylayouts_news_grid">
							<div class="py_agileits_news_grid">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class'=>'img-responsive')); ?></a>
							</div>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p><?php echo wp_trim_words(get_the_content(), 20 ); ?></p>
						</div>
					</li>

					<?php 	$i++;
			        		endwhile;
			        	endif;
						wp_reset_postdata();		        	
			        ?>
				</ul>
			</div>

		</div>
	</div>
<!-- //news -->
<!-- blog -->
<div class="blog">
	<div class="container">
	<h3 class="agile_head">Blog</h3>
	<?php 
		if ( function_exists( 'ot_get_option' ) ) {
		  echo '<p class="py_agile_para">'.ot_get_option( 'blog_subtitle' ).'</p>';
		}
	 ?>	
	<div class="agileits_pylayouts_blog_grids">

		<?php 	
        	$arrBlog = new WP_Query(array( 'post_type'=> 'post', 'category_name' => 'blog', 'posts_per_page' => 3 ));
        	if($arrBlog->have_posts()) :        		
        		while ($arrBlog->have_posts()) :
        			$arrBlog->the_post();
        ?>
		<div class="col-md-4">
			<div class="agileits_pylayouts_news_grid">
				<div class="py_agileits_news_grid">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class'=>'img-responsive')); ?></a>
					<div class="py_agileits_news_grid_pos">
						<h4>Date : <?php echo get_the_date( 'j F Y' ); ?> </h4>
					</div>
				</div>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
			</div>
		</div>

		<?php	endwhile;
        	endif;
			wp_reset_postdata();		        	
        ?>

	</div>
	</div>
</div>
<!-- //blog -->
<?php
	get_footer();
?>