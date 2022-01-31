<?php
/**
 *  template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage 
 * @since  1.0
 */

get_header(); ?>

	<section class="page-content primary unit two-thirds" role="main">

		<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'loop', get_post_format() ); ?>

				<aside class="post-aside">

					<div class="post-links">
						<?php previous_post_link( '%link', __( '&laquo; Previous post', 'site5framework' ) ) ?>
						<?php next_post_link( '%link', __( 'Next post &raquo;', 'site5framework' ) ); ?>
					</div>

					<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
						endif;
					?>

				</aside><?php

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>

	</section>


	<?php  get_sidebar(); ?>

<?php get_footer(); ?>