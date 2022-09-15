<?php

function wphierarchy_custom_admin_footer( $footer ) {

  $new_footer = str_replace( '.</span>', __(' and <a href="https://mickeymakesapps.com">Michael Pollard</a>.</span>', 'wphierarchy' ), $footer);
  return $new_footer;

}
add_filter( 'admin_footer_text', 'wphierarchy_custom_admin_footer', 10, 1 );