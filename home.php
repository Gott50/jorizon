<?php
/**
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jorizon
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */

					if (is_latest()):
                        get_template_part( 'template-parts/content', 'latest' );
					elseif (is_nth(2)):
                        get_template_part( 'template-parts/content', 'second' );
					else:
                        get_template_part( 'template-parts/content', get_post_type() );
					endif;

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

        </main><!-- #main -->
    </div><!-- #primary -->





    <div class="column one blog">
        <div class="leftholder"></div>
        <div class="portfolio_pics_holder">
            <div class="div-block">
                <div class="mid_hero_holder_portfolio">
                    <div class="herotwo first landscapefirst"
                         style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                    <div class="blog_text_hold">
                        <h1 class="blogtitle1">Landschafts Meerphotos</h1>
                        <h1 class="subtitle_blog">Wie man solche Bilder knipst</h1>
                        <h1 class="blogtime">1 day ago</h1>
                        <h1 class="subtitle_blog sub_subtitle">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div>
                </div>
                <div class="mid_hero_holder_portfolio bottomholder">
                    <div class="blog_text_hold right_aligned_holder">
                        <h1 class="blogtitle1 rightaligned">Landschafts Meerphotos</h1>
                        <h1 class="subtitle_blog rightaligned">Wie man solche Bilder knipst</h1>
                        <h1 class="blogtime">1 day ago</h1>
                        <h1 class="subtitle_blog sub_subtitle rightaligned">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div>
                    <div class="herotwo first landscapebottom"
                         style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                </div>
            </div>
            <div class="right_hero_holder_portfolio">
                <div class="herotwo thirdpic blogthird"
                     style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                <div class="blog_text_hold secondblog">
                    <h1 class="blogtitle1">Landschafts Meerphotos</h1>
                    <h1 class="subtitle_blog">Wie man solche Bilder knipst</h1>
                    <h1 class="blogtime">1 day ago</h1>
                    <h1 class="subtitle_blog sub_subtitle">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div>
            </div>
        </div>
    </div>
    <div class="column one blog">
        <div class="leftholder"></div>
        <div class="portfolio_pics_holder">
            <div class="div-block">
                <div class="mid_hero_holder_portfolio secondcolumn">
                    <div class="herotwo first landscapefirst blogfourth"
                         style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                    <div class="blog_text_hold">
                        <h1 class="blogtitle1">Landschafts Meerphotos</h1>
                        <h1 class="subtitle_blog">Wie man solche Bilder knipst</h1>
                        <h1 class="blogtime">1 day ago</h1>
                        <h1 class="subtitle_blog sub_subtitle">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div>
                </div>
                <div class="mid_hero_holder_portfolio bottomholder">
                    <div class="blog_text_hold right_aligned_holder">
                        <h1 class="blogtitle1 rightaligned">Landschafts Meerphotos</h1>
                        <h1 class="subtitle_blog rightaligned">Wie man solche Bilder knipst</h1>
                        <h1 class="blogtime">1 day ago</h1>
                        <h1 class="subtitle_blog sub_subtitle rightaligned">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div>
                    <div class="herotwo first landscapebottom blogsixth"
                         style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                </div>
            </div>
            <div class="right_hero_holder_portfolio">
                <div class="herotwo thirdpic blogthird blogfifth"
                     style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9019.jpg);"></div>
                <div class="blog_text_hold secondblog">
                    <h1 class="blogtitle1">Landschafts Meerphotos</h1>
                    <h1 class="subtitle_blog">Wie man solche Bilder knipst</h1>
                    <h1 class="blogtime">1 day ago</h1>
                    <h1 class="subtitle_blog sub_subtitle">Als Teil meines Berufs besuche ich nun schon seit beinahe zehn Jahren Veranstaltungen von Apple. Das Event am vergangenen Mittwoch im ...</h1><a href="#" class="title2 read_more_button w-button">Mehr lesen</a></div><a href="#" class="title2 load_more_button w-button">⇩ Mehr Beiträge laden</a></div>
        </div>
    </div>
<?php
get_footer();
