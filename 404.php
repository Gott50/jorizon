<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jorizon
 */

get_header();
?>
    <div class="utility-page-wrap"
         style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/DSC00211-1.jpg);">
        <div class="utility-page-content"><img src="https://d3e54v103j8qbb.cloudfront.net/static/page-not-found.211a85e40c.svg" class="image-2">
            <h2 class="heading">Page not found</h2>
            <div class="text-block">The page you are looking for doesn&#x27;t exist or has been moved.</div>
        </div>
    </div>
<?php
get_footer();
