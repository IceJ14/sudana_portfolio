<?php
/*
Template Name: Blog
*/
get_header(); ?>


<?php get_header(); ?>

	<section class="page-content primary unit two-thirds" role="main">
		

		
		<?php
			// WP 3.0 PAGED BUG FIX
			if ( get_query_var('paged') )
			$paged = get_query_var('paged');
			elseif ( get_query_var('page') )
			$paged = get_query_var('page');
			else
			$paged = 1;

			$args = array(
			'post_type' => 'post',
			'paged' => $paged );
			query_posts($args);
		?>
		<?php
			if ( have_posts() ):

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'site5framework' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'site5framework' ),
						)
					);

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</section>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>