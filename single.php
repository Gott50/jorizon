<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jorizon
 */

get_header(); ?>

    <h2 class="screen-reader-text"><?php echo __( 'Posts navigation' ) ?></h2>
<?php $in_same_term = false;
$prevPost           = get_previous_post( $in_same_term );
if ( $prevPost ): ?>
    <div class="post-navigation nav-previous">
		<?php $angle_left =  "<" ?>
		<?php $prevthumbnail = get_the_post_thumbnail( $prevPost->ID, array( 300, 300 ) ); ?>
		<?php previous_post_link( '%link',
			"
                <div class='posts-preview'>
                    $prevthumbnail  <p>%title</p>
                </div> $angle_left ", $in_same_term ); ?>
    </div>
<?php endif ?>

<?php $nextPost = get_next_post( $in_same_term );
if ( $nextPost ): ?>
    <div class="post-navigation nav-next">
		<?php $angle_right =  ">"?>
		<?php $nextthumbnail = get_the_post_thumbnail( $nextPost->ID, array( 300, 300 ) ); ?>
		<?php next_post_link( '%link',
			"$angle_right 
                <div class='posts-preview'>
                    $nextthumbnail  <p>%title</p>
                </div> ", $in_same_term ); ?>
    </div>
<?php endif ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :?>
                    <div onclick="toggleComments(this)" id="site-comments" class="single-post-comments post-attachment">
                        <button aria-expanded="false">
							<?php
							$number =  get_comments_number();
							echo sprintf( _n( '%s Comment', '%s Comments', $number ), number_format_i18n( $number ) )
							?> ...
                        </button>
                        <ul>
							<?php comments_template(); ?>
                        </ul>
                    </div>
				<?php
				endif;

			endwhile; // End of the loop.
			?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <script>
        function toggleComments(container) {
            if ( -1 !== container.className.indexOf( 'toggled' ) ) {
                container.className = container.className.replace( ' toggled', '' );
            } else {
                container.className += ' toggled';
            }
        }
    </script>
<?php
get_sidebar();
get_footer();
