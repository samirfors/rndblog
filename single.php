<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="nine columns alpha">

			<?php
			 get_template_part( 'loop', 'single' );
			?>
		</section><!-- end section -->
		<div class="two columns">
			&nbsp;
		</div>
		<aside class="five columns omega">
			<?php get_sidebar(); ?>
		</aside><!--! end aside -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
