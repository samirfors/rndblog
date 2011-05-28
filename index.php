<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea">
  	<div class="container">

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
		</div><!-- end .container -->
	</div><!-- end .mainarea -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
