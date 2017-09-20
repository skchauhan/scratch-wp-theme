<!DOCTYPE html>
<html lang="en">
<head>
<title>Payrolls <?php echo('| ');  the_title(); ?> </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="payrolls Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="agile_header_grid">
				<div class="py_agile_logo">
				<?php 
					$site_logo = get_theme_mod( 'lab_logo' );					
						if(!empty($site_logo)) {
				 ?>
					<h1><a href="<?php echo home_url(); ?>"> <img src="<?php echo($site_logo); ?>"> </a></h1>
				<?php 
					}
				?>
				</div>
				<div class="agileits_pylayouts_sign_in">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i><span> 
							<?php 
								if ( function_exists( 'ot_get_option' ) ) {
									echo ot_get_option( 'phone_number' );
								}
							 ?>
						 </span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="py_agileits_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<?php 
							    if ( has_nav_menu( 'primary' ) ) {
							    	wp_nav_menu( array(
								        'container'      => '',
								        'fallback_cb'    => false,
								        'menu_class'     => 'nav navbar-nav',
								        'theme_location' => 'primary'
								    ) );
								} 
							 ?>

							<div class="agileinfo_search">
								<?php echo get_search_form(); ?>
							</div>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- //header -->
<?php  if ( !is_front_page() )  { ?>
	<!-- banner -->	
		<div class="banner1">
			<?php  if (is_search()) { ?>
				<h3>Search: <?php echo(!empty($_GET['s']) ? $_GET['s'] : ''); ?></h3>
			<?php  }  else if( is_category() ) { ?>
				<h3><?php single_cat_title(); ?></h3>
			<?php } else {
			 ?>
				<h3><?php the_title(); ?></h3>
			<?php  } ?>
		</div>
	<!-- //banner -->		
<?php } ?>


