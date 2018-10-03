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
<?php $angle = "<svg class='icon icon-angle-down' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 113.69 52.07\"><title>Asset 187</title><g id=\"Layer_2\" data-name=\"Layer 2\"><g id=\"Layer_1-2\" data-name=\"Layer 1\"><path d=\"M62.13,46.79h0l37-37,3-3c3.85-3.85,7.7-4.23,11.56-2.64-5.29-4.38-12.77-6.73-19.88.38l-37,37-37-37C12.77-2.58,5.29-.23,0,4.15,3.85,2.56,7.71,2.94,11.56,6.8l3,3,37,37,5.29,5.28Z\"/></g></g></svg>" ?>
<?php $in_same_term = false;
$prevPost           = get_previous_post( $in_same_term );
if ( $prevPost ): ?>
    <div class="post-navigation nav-previous">
		<?php $prevthumbnail = get_the_post_thumbnail( $prevPost->ID, array( 300, 300 ) ); ?>
		<?php previous_post_link( '%link',
			"
                <div class='posts-preview'>
                    $prevthumbnail  <p>%title</p>
                </div> $angle ", $in_same_term ); ?>
    </div>
<?php endif ?>

<?php $nextPost = get_next_post( $in_same_term );
if ( $nextPost ): ?>
    <div class="post-navigation nav-next">
		<?php $nextthumbnail = get_the_post_thumbnail( $nextPost->ID, array( 300, 300 ) ); ?>
		<?php next_post_link( '%link',
			"$angle 
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
                    <div id="site-comments" class="single-post-comments post-attachment">
                        <button onclick="toggleComments(this)" aria-expanded="false">
							Hinterlasse einen Kommentar!
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
        function toggleComments(button) {
            var container = button.parentElement;
            if ( -1 !== container.className.indexOf( 'toggled' ) ) {
                container.className = container.className.replace( ' toggled', '' );
                button.setAttribute( 'aria-expanded', 'false' );
            } else {
                container.className += ' toggled';
                button.setAttribute( 'aria-expanded', 'true' );
            }
        }
    </script>
<?php
get_sidebar();
get_footer();
