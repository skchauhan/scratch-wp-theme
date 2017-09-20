<?php 
	get_header();
 ?>

 <!-- blog -->
<div class="blog">
	<div class="container">
	<div class="agileits_pylayouts_blog_grids">

		<?php 	
        	$arrBlog = new WP_Query(array( 'post_type'=> 'post', 'category_name' => 'blog' ));
        	if($arrBlog->have_posts()) :        		
        		while ($arrBlog->have_posts()) :
        			$arrBlog->the_post();
        ?>

		<div class="col-md-6 agileits__blog__item">
			<div class="agileits_pylayouts_news_grid">
				<div class="py_agileits_news_grid">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class'=>'img-responsive')); ?></a>
					<div class="py_agileits_news_grid_pos">
						<h4>Date : <?php echo get_the_date( 'j F Y' ); ?> </h4>
					</div>
				</div>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<?php echo wp_trim_words(get_the_content(), 30); ?>
			</div>
		</div>
		
		<?php	endwhile;
        	endif;
			wp_reset_postdata();		        	
        ?>
        
	</div>
	</div>
</div>
<!-- //.blog -->

<?php 
	get_footer();
?>