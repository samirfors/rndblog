<?php
	/*
	 * Start the Loop.
	 */ 
?>
<?php while ( have_posts() ) : the_post(); ?>
	
	<?php /* How to display all other posts. */ ?>

		<article class="post" id="post-<?php the_ID(); ?>">
			<div class="row">		
		    	<h1><?php the_title(); ?></h1>
			</div><!--! end .row -->
			<div class="row">
				<div class="leftcontent five columns alpha">
					<img src="http://placehold.it/240x300" />
				</div><!--! end .leftcontent -->
				<div class="postcontent ten columns omega">
				
					<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
								<?php the_excerpt(); ?>
					<?php else : ?>
								<?php //the_excerpt(); ?>
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					<?php endif; ?>
				</div><!--! end .postcontent -->
			</div><!--! end .row -->
		  	
		</article><!--! end .post -->

	<?php endwhile; // End the loop. Whew. ?>
