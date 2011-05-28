<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea">
  	<div class="container">

			<?php
			 get_template_part( 'loop', 'index' );
			?>
		</div><!-- end .container -->
	</div><!-- end .mainarea -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
