<?php get_header(); ?>
<!-- !Start loop -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
else :
	get_template_part( 'template-parts/content-none' );
endif;
?>
<!-- !End loop -->