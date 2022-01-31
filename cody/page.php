<?php
/**
 *  template for displaying Pages
 *
 * @package WordPress
 * @subpackage 
 * @since  1.0
 */

get_header(); ?>

	<section class="page-content primary unit two-thirds" role="main">

		<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'loop' ); ?>

				<div class="post-aside"><?php

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'site5framework' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'site5framework' ),
						)
					); ?>

					<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
						endif;
					?>

				</div><?php

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>

	</section>

	<?php  get_sidebar(); ?>

<?php get_footer(); ?>