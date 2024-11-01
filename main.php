<?php
/**
 * Plugin Name: VRView
 * Plugin URI: http://mob.fish
 * Description: Easyly embedd googles vrview
 * Version: 1.1.3
 * Author: Tobias Sell
 * Author URI: http://mob.fish
 */

define("VR_VIEW_PLUGIN_DIR", plugin_dir_path( __FILE__ ));
define("VR_VIEW_PLUGIN_URL", plugins_url( '/', __FILE__ ));

require_once(VR_VIEW_PLUGIN_DIR."inc/class-vrview-shortcode.php");
