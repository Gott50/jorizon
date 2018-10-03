<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jorizon
 */

?>

<style>
    .attachment-post-thumbnail {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="right_hero_holder_portfolio">
        <div class="herotwo thirdpic blogthird">
			<?php jorizon_post_thumbnail(); ?>
        </div>
        <div class="blog_text_hold secondblog">
			<?php
			the_title( '<h2 class="entry-title blogtitle1">', '</h2>' );
			if ( 'post' === get_post_type() ) :
				?>
                <div class="entry-meta blogtime">
					<?php jorizon_posted_on(); ?>
                </div><!-- .entry-meta -->
			<?php endif; ?>
            <h4 class="subtitle_blog sub_subtitle firsttext"><?php the_excerpt() ?></h4>
            <a href="<?php the_permalink() ?>" rel="bookmark"
               class="title2 read_more_button w-button">Mehr lesen</a>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
