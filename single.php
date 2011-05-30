<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="sixteen columns">

			<?php
			 get_template_part( 'loop', 'single' );
			?>
		</section><!-- end section -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
