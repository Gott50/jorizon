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
	<?php jorizon_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title">', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				jorizon_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
        <?php the_excerpt() ?>
        <a href="<?php the_permalink() ?>" rel="bookmark"
           class="title2 read_more_button w-button">Mehr lesen</a>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
