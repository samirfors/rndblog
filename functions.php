<?php

if (!is_admin())
{
  wp_enqueue_style('rndblog-less', get_template_directory_uri().'/stylesheets/rndblog.less', array(), '1.0', 'screen,projection');
}


?>