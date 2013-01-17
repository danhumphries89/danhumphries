<?php get_header(); ?>

	<div class="home_content full-page"></div>

	<?php 
		$query_posts = new WP_Query( array('post_type'=>'post', 'category_name'=>'portfolio' ));
		while( $query_posts->have_posts() ) : $query_posts->the_post();
	?>
		<div class="porfolio_collection flexslider">
			<div class="item">
				<?php get_template_part( 'content' ); ?>
			</div>
		</div>
	<?php endwhile; ?>



<?php get_footer(); ?>