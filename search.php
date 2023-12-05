<?php
/*
Template Name: Search Page
*/

get_header()
	?>
<h4> Wyniki wyszukiwania dla frazy
	<?php echo get_search_query(); ?>
</h4>
<div class="main-loop-wrapper">
	<?php

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content' );
		endwhile;
		wp_reset_postdata();
	else :
		get_template_part( 'template-parts/content-none' );
	endif;
	?>
</div>

<!-- !pagination--wrapper start -->
<div class="pagination--wrapper">
	<?php echo paginate_links(
		array(
			"mid_size" => 3,
			"prev_text" => '<i class="fa-solid fa-arrow-left"></i>',
			"next_text" => '<i class="fa-solid fa-arrow-right"></i>',
		)
	); ?>


</div>
<!-- !pagination--wrapper end -->

</section>
<?php get_footer(); ?>