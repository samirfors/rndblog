<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="fourteen columns">

			<?php
			 get_template_part( 'loop', 'page' );
			?>
		</section><!-- end section -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
