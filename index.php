<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="nine columns alpha">

			<?php
			 get_template_part( 'loop', 'index' );
			?>
		</section><!-- end .container -->
		<?php get_sidebar(); ?>
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
