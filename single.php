<?php
/**
 * The template for displaying all single posts and attachments
 *
 *  Literary Theme  Single.php
 */

get_header(); ?>
<section class="single-section">
	<?php if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>

			<div class="single-text">
				<h2 class="single-text__title">
					<?php the_title() ?>
				</h2>
				<div class="category-wrapper single-category">
					<a href="">Data</a>

					<?php the_category( "." ); ?>

					<a href="">
						<?php the_author(); ?>
					</a>



				</div>

				<div class="single-img--wrapper">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( "" );
					}
					the_post_thumbnail_caption();
					?>
				</div>

				<p>
					<?php the_content(); ?>
				</p>


			<?php endwhile;
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

		<?php else : ?>
			<p>
				<?php _e( 'Przepraszamy, nie ma tu żadnych postów.' ); ?>
			</p>
		<?php endif; ?>

	</div>
</section>