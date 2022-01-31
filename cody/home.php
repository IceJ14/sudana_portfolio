<?php get_header(); ?>

    <!-- featured article -->
    <section class="featured whole">

        <?php
            $args = array(
                'posts_per_page' => 6,
                'category__in'  => array(of_get_option( 'sticky_posts' )),
                'orderby' => 'date', 'order' => 'DESC'
            );
            query_posts( $args );
            if (have_posts()) : while (have_posts()) : the_post();
        ?>

        <!-- begin sticky post article -->
        <article <?php post_class("unit one-third hoverable"); ?> >

                <?php
                if ( has_post_thumbnail() ) {
                ?>
                <div class="post-thumb">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></a>
                </div>
                <?php } ?>
                
                <div class="post-info">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <!-- begin postmeta -->
                    <div class="postmeta">
                
                        <span class="post-comments"><i class="fa fa-comment"></i> <?php comments_popup_link('0', '1', ' % '); ?></span>
                    </div>
                    <!-- end postmeta -->
                </div>

        </article>
        <!-- end sticky post article -->

         <?php endwhile; endif; ?>

    </section>
    <!-- featured article -->


    <?php if($show_blog_on_homepage) { ?>
    <section class="page-content primary unit two-thirds" role="main">
        
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

    <?php } ?>


<?php get_footer(); ?>