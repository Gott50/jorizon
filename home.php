<?php
/**
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

            <div class="sectionlast">
                <div class="column one">
                    <div class="leftholder">
                        <h1 class="title2">Landschaften</h1><a href="#" class="title3 m_left landscapes">Share Foto</a>
                    </div>
                    <div class="herotwo" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9274-2.jpg);"></div>
                    <div class="leftholder descriptionholder">
                        <div class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div><a href="#" class="cta">Mehr Fotos👉</a></div>
                </div>
                <div class="column two">
                    <div class="hero3" style="    background-image: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15)), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_8575.jpg);"></div>
                </div>
                <div class="column one bottom">
                    <div class="leftholder descriptionholder">
                        <div class="description portraitdescription">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div><a href="#" class="cta">Mehr Fotos👉</a></div>
                    <div class="herotwo portrait" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/JSL02495.jpg)"></div>
                    <div class="leftholder portraitholder">
                        <h1 class="title2 portraittitle">Portraits</h1><a href="#" class="title3 m_right">Share Foto</a>
                    </div>
                </div>
                <div class="column two">
                    <div class="hero3 portrait3" style="background-image: linear-gradient(180deg, transparent, transparent), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/JSL02200.jpg);"></div>
                </div>
            </div>
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'home' );

				endwhile;
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
            <div class="sectionlasts">
                <div class="column one contactcolumn">
                    <div class="leftholder">
                        <div class="left_holder_top">
                            <h1 class="title2">Kontakt</h1>
                            <h1 class="title3 m_left">Email schicken</h1>
                            <h1 class="title4_bottom">2018 Eibsee</h1>
                        </div>
                    </div>
                    <div class="herotwo" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9274-2.jpg)"></div>
                    <div class="leftholder descriptionholder">
                        <div class="form-block w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form">
                                <label for="name" class="title4_contact">Name:</label>
                                <input type="text"
                                       class="field w-input"
                                       maxlength="256" name="name"
                                       data-name="Name"
                                       placeholder="Enter your name"
                                       id="name"><label
                                        for="email" class="title4_contact">Email Address:</label>
                                <input type="text"
                                       class="field second w-input"
                                       maxlength="256"
                                       name="email"
                                       data-name="Email"
                                       placeholder="Enter your email"
                                       id="email"
                                       required=""><input
                                        type="submit" value="Submit" data-wait="Please wait..."
                                        class="submit-button w-button"></form>
                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
