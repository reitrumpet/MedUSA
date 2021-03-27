<?php 

/*

Template Name: General Template

*/

?>

<?php get_header(); ?>

<div class="uk-container">
	<div class="uk-grid">
		
		<div class="general-template">
			<?php 
							// Se houver algum post
			if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
				while( have_posts() ): the_post();

					?>

					<article>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>

					<?php 
				endwhile;
			else:
				?>

				<p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'medusa' ); ?></p>

			<?php endif; ?>

		</div>

	</div>
</div>

<?php get_footer(); ?>