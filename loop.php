<?php /* Display navigation to next/previous pages when applicable */ ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/*
	 * Start the Loop.
	 */ 
?>
<?php while ( have_posts() ) : the_post(); ?>
	
	<?php /* How to display all other posts. */ ?>

		<article class="post" id="post-<?php the_ID(); ?>">
			<div class="row top">		
				<div class="metainformation four columns alpha">
					<p>
						By: <strong><?php echo get_the_author(); ?></strong> <br /><?php the_time('F jS, Y'); ?>
					</p>
          <?php the_post_thumbnail(); ?>
				</div>
				<div class="postcontent eleven columns omega">
		    	<h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Link to %s', 'rndblog'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	
					<?php if ( is_search() ) : // Only display excerpts for archives and search. ?>
								<?php the_excerpt(); ?>
								<p class="readmore"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Link to %s', 'rndblog'), the_title_attribute('echo=0') ); ?>" rel="bookmark">Read more</a></p>
					<?php else : ?>
								<?php the_content(); ?>
					<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
								
					<?php endif; ?>
					<div class="commentscontent loop">
					  <?php comments_popup_link(); ?>
					</div>
		  	</div><!--! end .postcontent -->
			</div><!--! end .row -->
			<!-- <div class="row">
			       <div class="three columns alpha">
			         &nbsp;
			       </div>
			       <div class="commentscontent twelve columns omega loop">
			         
			       </div>
			     </div> --><!--! end .row -->
		</article><!--! end .post -->

	<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <div id="nav-below" class="navigation">
    <div class="nav-previous" style="float:left"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'rndblog' ) ); ?></div>
    <div class="nav-next" style="float:right"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'rndblog' ) ); ?></div>
  </div><!-- #nav-below -->
<?php endif; ?>