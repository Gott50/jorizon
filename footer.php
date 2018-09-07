<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jorizon
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="menu secondmenu portfoliomenu">
	        <?php
	        wp_nav_menu( array(
		        'theme_location' => 'footer',
		        'menu_id'        => 'footer-menu',
		        'menu_class'     => 'menuitems second_menu_items',
	        ) );
	        ?>
            <div class="socialmedia"><a href="https://www.instagram.com/jorizon/?hl=de" target="_blank" class="sociallogo"
                style="    background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/Asset-17.svg)"></a></div>
            <div class="socialmedia leftbar"><a href="index.html" class="sociallogo homelogo portfoliologo"
                style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/insta-logo-black.svg);"></a></div>
        </div>
        <div class="imprint two">
            <div class="hero3 imprintbg" style="background-image: linear-gradient(180deg, transparent, transparent), url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/IMG_8533-1.jpg);">
                <a href="#" class="title2 imprinttitle">Impressum &amp; Daten</a></div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
