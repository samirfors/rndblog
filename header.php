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
				<div class="row">
					<div class="logo five columns alpha">
						<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/klarna_smaller.png" /></a>
					</div>
					<nav class="menu six columns">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">About</a></li>
						</ul>
					</nav>
					<div class="widgets five columns omega">
							<?php get_search_form(); ?>
					</div>
				</div><!--! end .row -->
      </div><!--! end .container -->
    </header>