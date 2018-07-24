<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('active_link')) {
  function activate_menu($controller) {
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    return ($class == $controller) ? 'active' : '';
  }
}