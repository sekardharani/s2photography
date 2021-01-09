<?php
/**
 * The template for front pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dsinz_template
 */

get_header();
?>
<?php
get_template_part( 'template-parts/content', 'slider' );
get_template_part( 'template-parts/content', 'area' );
get_template_part( 'template-parts/content', 'about' );
get_template_part( 'template-parts/content', 'service' );
get_template_part( 'template-parts/content', 'gallery' );
get_template_part( 'template-parts/content', 'recentpost' );
?>
<?php
get_footer();
