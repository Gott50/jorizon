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
    <div class="column one blog">
        <header class="page-header leftholder">
			<?php
			the_archive_title( '<h1 class="page-title title2">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
            <a href="#" class="title3 m_left landscapes">Book me</a>
        </header> <!-- .page-header -->
        <div class="portfolio_pics_holder firstholder">
            <div class="herotwo first blogfirst">
				<?php jorizon_post_thumbnail(); ?>
            </div>

            <div class="title2 most_recent_badge">Most recent</div>
			<?php
			the_title( '<h2 class="entry-title blogtitle1 firsttext">', '</h2>' );
			if ( 'post' === get_post_type() ) :
				?>
                <div class="entry-meta blogtime">
					<?php jorizon_posted_on(); ?>
                </div><!-- .entry-meta -->
			<?php endif; ?>
            <h4 class="subtitle_blog sub_subtitle firsttext"><?php the_excerpt()?></h4>
            <a href="<?php the_permalink() ?>" rel="bookmark"
               class="title2 read_more_button first_more_button w-button">Mehr lesen</a></div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
