<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jorizon
 */

?>

<article id="post-<?php the_ID(); ?>" class="column one blogsection">
    <header class="blogholder">
        <?php the_title( '<h1 class="title2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
        <h1 class="blogsubtitle">Letztens war ich shooten. Ein Bericht voller Angst.</h1>
        <a href="#" class="title3 blogshare m_left blog">Share Article</a>
        <?php if ( 'post' === get_post_type() ) :
        ?>
        <h2 class="title4_bottom">
		    <?php
		    jorizon_posted_on();
		    jorizon_posted_by();
		    ?>
        </h2><!-- .entry-meta -->
        <?php endif; ?>
    </header>
    <div class="herotwo">
        <?php jorizon_post_thumbnail(); ?>
    </div>
    <div class="blogholder right">
        <div class="description blog_preview_text">
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jorizon' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jorizon' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
        <a href="#" class="cta blogmore">Mehr lesen👉</a></div>
</article><!-- #post-<?php the_ID(); ?> -->
