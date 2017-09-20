<?php
/**
 * The template for displaying all pages
 **/
	get_header(); 
	
?>
	<section id="single_page">
		<div class="container">
		    
	    		<?php 
		    		if(have_posts()) :
		    			while ( have_posts() ) :
		    				the_post();		
		    		?>
		    			<div class="col-md-12">
							<div class="agileits_pylayouts_single_blog">
								<div class="py_agileits_single_post">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class'=>'img-responsive')); ?></a>
								</div>
								<?php the_content(); ?>
							</div>
						</div>	
		    				
					<?php
		    			endwhile;
		    		endif;
	    		?>

		</div>
	</section>
	
<?php get_footer();
