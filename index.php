<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="eleven columns alpha">

			<?php
			 get_template_part( 'loop', 'index' );
			?>
		</section><!-- end section -->
		<aside class="five columns omega">
			<?php get_sidebar(); ?>
		</aside><!--! end aside -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
