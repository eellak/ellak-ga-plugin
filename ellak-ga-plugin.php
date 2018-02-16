<?php
/*
Plugin Name: Ellak-GA plugin
Description: Include GA code snippets accordingly to the site of the multisite.
Version: 0.1.0
Author: David Bromoiras
Author URI: http://www.anchor-web.gr
*/

/*
 * Include the file containing all the different <head> google analytics code
 * snippets for appending on each site.
 */
//include_once(__DIR__."/analytics-snippets-inc.php");

/*
 * First, we register the "entry-point" script that will act as a reference hook
 * for the snippets to be appended through wp_add_inline_script.
 */
//function register_ellak_ga_carrier_js(){
//  wp_enqueue_script("ellak-ga-carrier-js", "/wp-content/plugins/ellak-ga-plugin/js/ellak-ga-carrier.js");
//}
//add_action("wp_enqueue_scripts", "register_ellak_ga_carrier_js");
//
//$blog_id=get_current_blog_id();
//$blog_name=get_bloginfo();

function add_general_snippet(){
	wp_enqueue_script("ellak-ga-general-script", "/wp-content/plugins/ellak-ga-plugin/js/general_ellak_gr.js");
}
add_action("wp_enqueue_scripts", "add_general_snippet");

if($blog_id==1){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==2){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/mathe_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==3){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/smartcities_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==5){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/opensource_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==3){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/oer_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==7){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/advisory_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==8){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/legal_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==9){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/privacy_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==10){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/opengov_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==11){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/edu_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==12){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/opendata_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==13){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/openhardware_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==14){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/openstandards_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==15){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/obs_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==17){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/odi_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==18){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/mycontent_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==19){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/creativecommons_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==23){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/eellak_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==24){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/gfoss_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==25){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/openwifi_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==26){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/publicfiscal_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==27){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/donate_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==28){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/opendesign_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==29){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/openbusiness_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
elseif($blog_id==33){
  function add_snippet(){
    wp_enqueue_script("ellak-ga-script", "/wp-content/plugins/ellak-ga-plugin/js/scientix_ellak_gr.js");
  }
  add_action("wp_enqueue_scripts", "add_snippet");
}
