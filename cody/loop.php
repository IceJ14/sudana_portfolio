<?php
/**
 *  template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage 
 * @since  1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( has_post_thumbnail() ) { ?>
		<div class="post-image"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
	<?php }	?>
	
	<div class="post-meta"><?php
		cody_post_meta(); ?>
	</div>

	<h1 class="post-title"><?php

		if ( is_singular() ) :
			the_title();
		else : ?>

			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php
				the_title(); ?>
			</a><?php

		endif; ?>

	</h1>

	

	<div class="post-content">

		<?php if ( is_front_page() || is_category() || is_archive() || is_search() ) : ?>

			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Read more', 'site5framework' ); ?></a>

		<?php else : ?>

			<?php the_content( __( 'Continue reading', 'site5framework' ) ); ?>

		<?php endif; ?>

		<?php
			wp_link_pages(
				array(
					'before'           => '<div class="linked-page-nav"><p>'. __( 'This article has more parts: ', 'site5framework' ),
					'after'            => '</p></div>',
					'next_or_number'   => 'number',
					'separator'        => ' ',
					'pagelink'         => __( '&lt;%&gt;', 'cody' ),
				)
			);
		?>
		
		

	</div>

</article>