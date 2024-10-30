<?php
/*
Plugin Name: Marbu Login Redirect
Author: Marco Buttarini
Plugin URI: http://www.marbu.org
Description: Redirect users to different hom page after logging in.
Version: 1.0
*/



function redirect_to_home() {
  global $wpdb;
  $mystring = $_SERVER['HTTP_REFERER'];
  $findme   = 'wp-login.php';
  $pos = strpos($mystring, $findme);
  if (!($pos === false)) {
      $redirect_to=get_bloginfo('url');
    wp_redirect($redirect_to);
  }
  }



add_action("admin_head", "redirect_to_home");
?>