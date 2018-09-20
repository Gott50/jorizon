<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jorizon
 */

?>

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
            <div class="herotwo first blogfirst"
                 style=" background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/JSL01712-1.jpg);"></div>
            <div class="title2 most_recent_badge">Most recent</div>
            <h1 class="blogtitle1 firsttext">Landschafts Meerphotos</h1>
            <h1 class="subtitle_blog firsttext">Wie man solche Bilder knipst</h1>
            <h1 class="blogtime">1 day ago</h1>
            <h1 class="subtitle_blog sub_subtitle firsttext">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button first_more_button w-button">Mehr lesen</a></div>
    </div>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				jorizon_posted_on();
				jorizon_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php jorizon_post_thumbnail(); ?>

	<div class="entry-content">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php jorizon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
