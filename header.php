<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

		?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

  <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/base.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/rndblog.less" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script>
    var disqus_developer = 1;
  </script>

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		wp_head();
	?>
  </head>
  <body>
    <!-- Primary Page Layout
    ================================================== -->

    <header>
      <div class="container">
					<div class="logo five columns alpha">
						<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/klarna_smaller.png" /></a>
					</div>
					<nav class="menu eleven columns">
							<?php wp_page_menu('show_home=1&menu_class=page-navi&sort_column=menu_order'); ?>
					</nav>
					<!-- <div class="widgets five columns omega">
							<?php get_search_form(); ?>
					</div> -->
      </div><!--! end .container -->
    </header>
		<section class="banner">
			<div class="container">
			<!-- <img src="http://placehold.it/934x100" /> -->
			<img src="http://flickholdr.com/934/150/imac,coding/6" alt="Placeholder image from flickholdr.com" />
			</div>
		</section>