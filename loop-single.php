<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

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
		    	<h1><?php the_title(); ?></h1>
		    	<div class="useravatar">
					  <?php 
					    $uid = get_the_author_meta('user_email');
               echo get_avatar( $uid, $size = '50', $default = '' ); 
            ?>
            </div>
					<p class="metainformation">
						by <strong><?php echo get_the_author(); ?></strong><br />
						<?php the_time('F jS, Y'); ?>
					</p>
			</div><!--! end .row -->
			<div class="row">
				<div class="leftcontent five columns alpha">
					<?php the_post_thumbnail('post-single'); ?>
					&nbsp;
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
		  	
			
			<div class="row">
				<div class="commentscontent fifteen columns">
					<?php comments_template( '', true ); ?>
				</div>
			</div><!--! end .row -->
		</article><!--! end .post -->

	<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>