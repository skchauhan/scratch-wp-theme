<?php  if( (get_the_ID() == 37) || (get_the_title() == "Contact") || (is_search()) ) {  } else { ?>

	<!-- stats -->
	<div class="stats">
		<div class="wthree_stat">
			<div class="container">
				<div class="col-md-12 wthree_stat_left text-center">
					
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo '<h3>'.ot_get_option( 'online_support_title' ).'</h3>';
						}
					

						if ( function_exists( 'ot_get_option' ) ) {
						  echo '<p>'.ot_get_option( 'online_support_content' ).'</p>';
						}
					?>
					<div class="agileits_more">
						<ul>
							<li><a href="<?php echo home_url().'/quickbooks-payroll-online-support' ?>" class="hvr-icon-hang">Read More</a></li>
						</ul>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="pylayouts_newsletter">
			<div class="container">
				<div class="pylayouts_disclaimer text-center">
					<h3>Disclaimer</h3>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo '<p>'.ot_get_option( 'disclaimer' ).'</p>';
						}
					 ?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //stats -->

<?php  }  ?>


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="py_footer_grids">
				<div class="col-md-4 py_footer_grid fot_content">

					<a href="<?php echo(site_url()); ?>">
						<?php 
							$site_logo = get_theme_mod( 'lab_logo' );
							if(!empty($site_logo)) {
						?>	
							<img class="img-responsive" src="<?php echo($site_logo); ?>" alt="">
						<?php		
							} else {
								echo get_bloginfo( 'name' ); 
							}
						 ?>
					</a>

					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo ot_get_option( 'payroll_footer_content' );
						}
					 ?>	
				</div>
				<div class="col-md-3 py_footer_grid">
					<div class="pyl_footer_grid">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<h4>Address</h4>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo '<p>'.ot_get_option( 'address' ).'</p>';
						}
					 ?>	

				</div>
				<div class="col-md-2 py_footer_grid">
					<div class="pyl_footer_grid">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h4>Call Us</h4>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo ot_get_option( 'call_us' );
						}
					 ?>	
				</div>
				<div class="col-md-3 py_footer_grid">
					<div class="pyl_footer_grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<h4>Mail Us</h4>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
						  echo ot_get_option( 'mail_us' );
						}
					 ?>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="pyls_copyright_left">

				<?php 
					if ( has_nav_menu( 'footer' ) ) {
				    	wp_nav_menu( array(
					        'container'      => '',
					        'fallback_cb'    => false,
					        'menu_class'     => '',
					        'theme_location' => 'footer'
					    ) );
					} 
				?>

				
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
					  echo '<p>'.ot_get_option( 'copyright' ). '</p>';
					}
				 ?>	

			</div>
			<div class="pyls_copyright_right">
				<ul>
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
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<?php  wp_footer(); ?>
</body>
</html>