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
                        <div class="description">
                            Die Landschaftsfotografie ist meine fotografische Heimat. Noch immer
                            ist die Faszination für die unbändigbare Kraft der Natur, die sich uns immer wieder in
                            fantastischen Szenerien offenbart, ungebrochen. Hier ist eine kleine Auswahl meiner
                            Aufnahmen.
                        </div><a href="#" class="cta">Mehr Fotos👉</a></div>
                </div>
                <div class="column two">
                    <div class="hero3" style="    background-image: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15)), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_8575.jpg);"></div>
                </div>
                <div class="column one bottom">
                    <div class="leftholder descriptionholder">
                        <div class="description portraitdescription">
                            Hier ist eine kleine Auswahl meiner Portraits. Wenn ihr Interesse an eigenen habt, dann
                            schreibt mir einfach eine Nachricht.
                        </div><a href="#" class="cta">Mehr Fotos👉</a></div>
                    <div class="herotwo portrait" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/JSL02495.jpg)"></div>
                    <div class="leftholder portraitholder">
                        <h1 class="title2 portraittitle">Portraits</h1><a href="#" class="title3 m_right">Share Foto</a>
                    </div>
                </div>
                <div class="column two">
                    <div class="hero3 portrait3" style="background-image: linear-gradient(180deg, transparent, transparent), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/JSL02200.jpg);"></div>
                </div>
            </div>
            <div class="column one blogsection">
                <div class="blogholder">
                    <h1 class="title2">Blog</h1>
                    <a href="#" class="title3 blogshare m_left blog">Share Article</a>
                </div>
                <div class="herotwo blog" style="    background-image: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15)), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_8575.jpg);"></div>
                <div class="blogholder right">
                    <div class="description blog_preview_text">
                        Die Fotografie versorgt jeden, der sich eingehender mit ihr befasst, mit allen möglichen
                        Geschichten. Daher werde ich hier regelmäßig einige eigene Geschichten erzählen. Für euch gibt
                        es dazu viele Hintergrundinformationen, Tipps und Tricks sowie spannende Locations, die
                        einen Besuch auf jeden Fall wert sind.
                    </div><a href="#" class="cta blogmore">Mehr lesen👉</a></div>
            </div>
            <div class="sectionlasts">
                <div class="column one contactcolumn">
                    <div class="leftholder">
                        <div class="left_holder_top">
                            <h1 class="title2">Kontakt</h1>
                            <h1 class="title3 m_left">Email schicken</h1>
                        </div>
                    </div>
                    <div class="herotwo" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_9274-2.jpg)"></div>
                    <div class="leftholder descriptionholder">
                        <div class="form-block w-form">
                            <form method="post" action="https://formspree.io/johannes-lesser@web.de"
                                    id="email-form" name="email-form" data-name="Email Form" class="form">
                                <label for="name" class="title4_contact">Name:</label>
                                <input type="text"
                                       class="field w-input"
                                       maxlength="256" name="name"
                                       data-name="Name"
                                       placeholder="Dein Name"
                                       id="name"><label
                                        for="email" class="title4_contact">Email Adresse:</label>
                                <input type="text"
                                       class="field second w-input"
                                       maxlength="256"
                                       name="email"
                                       data-name="Email"
                                       placeholder="Deine Email"
                                       id="email"
                                       required="">
                                <label
                                        for="email" class="title4_contact">Nachricht:</label>
                                <textarea rows="5"
                                       class="field second w-input"
                                       name="text"
                                       data-name="Message"
                                       placeholder="Deine Nachricht"
                                       id="text"
                                          required=""></textarea>
                                <input
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
