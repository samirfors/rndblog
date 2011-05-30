<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="sixteen columns alpha">

			<?php
			 get_template_part( 'loop', 'index' );
			?>
		</section><!-- end section -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
