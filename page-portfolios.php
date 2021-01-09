<?php
/**
 * Template Name : service
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
<div class="innerbanner" style="background:url(http://flythemesdemo.net/photolite/wp-content/themes/photolite-pro/images/inner-banner.jpg) no-repeat scroll center center; background-size:cover;">
   <div class="container">
      <h1 class="innerpage-title">
         <span>
		 Portfolios
		 </span>
      </h1>
   </div>
   <!-- container -->
</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'gallery' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


<?php
get_footer();
