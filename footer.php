    <footer>
      <div class="container">
        <h3>Footer</h3>
      </div><!--! end .container -->
    </footer>
    <!-- JS
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>window.jQuery || document.write("<script src='<?php bloginfo( 'template_url' ); ?>/javascripts/jquery-1.5.1.min.js'>\x3C/script>")</script>
    <script src="<?php bloginfo( 'template_url' ); ?>/javascripts/less-1.1.0.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/javascripts/app.js"></script>
    <!--<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
    <script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js"></script>-->
    
    <!-- <script>
    SyntaxHighlighter.defaults['tab-size'] = 2;
    SyntaxHighlighter.defaults['gutter'] = false;
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.defaults['class-name'] = 'eleven columns code';
    SyntaxHighlighter.autoloader(
      'js jscript javascript  http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js',
      'applescript            http://alexgorbatchev.com/pub/sh/current/scripts/shBrushAppleScript.js',
      'erlang                 http://alexgorbatchev.com/pub/sh/current/scripts/shBrushErlang.js',
      'css                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCss.js',
      'python                 http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPython.js',
      'php                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js',
      'ruby                   http://alexgorbatchev.com/pub/sh/current/scripts/shBrushRuby.js',
      'sql                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushSql.js',
      'html                   http://alexgorbatchev.com/pub/sh/current/scripts/shBrushXml.js'
    );

    SyntaxHighlighter.all();
    </script> -->

    <!-- End Document
    ================================================== -->
		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */

			wp_footer();
		?>
  </body>
</html>