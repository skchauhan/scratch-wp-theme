<?php 
	/*Template Name: Contact Us*/
	get_header() ;
?>
	<!-- contact -->
	<div class="services">
		<div class="container">
			<div class="agileits_pylayouts_contact_grids">
			<?php 
				if( have_posts() ) :
					while ( have_posts() ) :
							the_post();
			?>	
				<div class="col-md-5 agileits_pylayouts_contact_gridl">
						<div class="agileits_mail_grid_right_grid">
						
						<?php 
							if ( function_exists( 'ot_get_option' ) ) {
								echo ot_get_option( 'contact_about_us' );
							}
						 ?>

						
							
							</div>
							<div class="agileits_mail_grid_right_grid">
							<h4>Social Media</h4>
							<ul class="wthree_mail_social">
							    <?php 
								  	if ( function_exists( 'ot_get_option' ) ) {
								    	$social_icons = ot_get_option( 'social_icons' );
										if(!empty($social_icons)) {
											foreach($social_icons as $date) {
												if(!empty($date['href'])) {
								?>
											<li><a href="<?php echo($date['href']);  ?>" class="py_agile_<?php echo($date['title']); ?>"><i class="fa fa-<?php echo($date['title']); ?>" aria-hidden="true"></i></a></li>
								<?php			
												}
											}
											
										}
									}
								?>
							</ul>
							</div>
							<div class="agileits_mail_grid_right_grid">
								<?php 
									if ( function_exists( 'ot_get_option' ) ) {
										echo ot_get_option( 'contact_info' );
									}
								 ?>

							</div>
				</div>
			<?php			
					endwhile;
				endif;
			 ?>
				<div class="col-md-7 agileits_pylayouts_contact_gridr">
					<?php echo do_shortcode('[contact-form-7 id="79" title="Contact form 1"]'); ?>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="map">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
	<br>
<!-- //contact -->

<?php 
	get_footer();
?>