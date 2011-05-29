    <footer>
      <div class="container">
        <?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with four columns of widgets.
					 */
					get_sidebar( 'footer' );
				?>
      </div><!--! end .container -->
    </footer>
    <!-- JS
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>window.jQuery || document.write("<script src='<?php bloginfo( 'template_url' ); ?>/javascripts/jquery-1.5.1.min.js'>\x3C/script>")</script>
    <script src="<?php bloginfo( 'template_url' ); ?>/javascripts/less-1.1.0.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/javascripts/app.js"></script>

    <!-- End Document
    ================================================== -->
		<?php
			wp_footer();
		?>
  </body>
</html>