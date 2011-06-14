<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

	<div class="mainarea container">
  	<section class="sixteen columns alpha">
      <article class="post">
					<div class="row">		
				    	<h1>404.</h1>
					</div><!--! end .row -->
					<div class="row">
					  <div class="leftcontent five columns alpha">
					    <img src="<?php bloginfo( 'template_url' ); ?>/images/404.png" />
					  </div><!--! end .leftcontent -->
					  <div class="postcontent ten columns omega">
					    <p>This piece of content could not be found.</p>
					  </div><!--! end .row -->
				</article><!--! end .post -->
		</section><!-- end section -->
	</div><!-- end .mainarea -->

<?php get_footer(); ?>
