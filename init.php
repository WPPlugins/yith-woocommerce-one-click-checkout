<?php
/**
 * Plugin Name: YITH WooCommerce One-Click Checkout
 * Plugin URI: https://yithemes.com/themes/plugins/yith-woocommerce-one-click-checkout/
 * Description: YITH WooCommerce One-Click Checkout allows your customer to create order by clicking only one link
 * Version: 1.1.0
 * Author: YITHEMES
 * Author URI: https://yithemes.com/
 * Text Domain: yith-woocommerce-one-click-checkout
 * Domain Path: /languages/
 *
 * @author Yithemes
 * @package YITH WooCommerce One-Click Checkout
 * @version 1.1.0
 */
/*  Copyright 2015  Your Inspiration Themes  (email : plugins@yithemes.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

function yith_wocc_free_install_woocommerce_admin_notice() {
	?>
	<div class="error">
		<p><?php _e( 'YITH WooCommerce One-Click Checkout is enabled but not effective. It requires WooCommerce in order to work.', 'yith-woocommerce-one-click-checkout' ); ?></p>
	</div>
<?php
}


function yith_wocc_install_free_admin_notice() {
	?>
	<div class="error">
		<p><?php _e( 'You can\'t activate the free version of YITH WooCommerce One-Click Checkout while you are using the premium one.', 'yith-woocommerce-one-click-checkout' ); ?></p>
	</div>
	<?php
}

if ( ! function_exists( 'yith_plugin_registration_hook' ) ) {
	require_once 'plugin-fw/yit-plugin-registration-hook.php';
}
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );


if ( ! defined( 'YITH_WOCC_VERSION' ) ){
	define( 'YITH_WOCC_VERSION', '1.1.0' );
}

if ( ! defined( 'YITH_WOCC_FREE_INIT' ) ) {
	define( 'YITH_WOCC_FREE_INIT', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'YITH_WOCC_INIT' ) ) {
	define( 'YITH_WOCC_INIT', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'YITH_WOCC' ) ) {
	define( 'YITH_WOCC', true );
}

if ( ! defined( 'YITH_WOCC_FILE' ) ) {
	define( 'YITH_WOCC_FILE', __FILE__ );
}

if ( ! defined( 'YITH_WOCC_URL' ) ) {
	define( 'YITH_WOCC_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'YITH_WOCC_DIR' ) ) {
	define( 'YITH_WOCC_DIR', plugin_dir_path( __FILE__ )  );
}

if ( ! defined( 'YITH_WOCC_TEMPLATE_PATH' ) ) {
	define( 'YITH_WOCC_TEMPLATE_PATH', YITH_WOCC_DIR . 'templates' );
}

if ( ! defined( 'YITH_WOCC_ASSETS_URL' ) ) {
	define( 'YITH_WOCC_ASSETS_URL', YITH_WOCC_URL . 'assets' );
}

/* Plugin Framework Version Check */
if( ! function_exists( 'yit_maybe_plugin_fw_loader' ) && file_exists( YITH_WOCC_DIR . 'plugin-fw/init.php' ) ) {
	require_once( YITH_WOCC_DIR . 'plugin-fw/init.php' );
}
yit_maybe_plugin_fw_loader( YITH_WOCC_DIR  );

function yith_wocc_free_init() {

	load_plugin_textdomain( 'yith-woocommerce-one-click-checkout', false, dirname( plugin_basename( __FILE__ ) ). '/languages/' );

	// Load required classes and functions
	require_once('includes/class.yith-wocc.php');

	// Let's start the game!
	YITH_WOCC();
}
add_action( 'yith_wocc_free_init', 'yith_wocc_free_init' );


function yith_wocc_free_install() {

	if ( ! function_exists( 'WC' ) ) {
		add_action( 'admin_notices', 'yith_wocc_free_install_woocommerce_admin_notice' );
	}
	elseif ( defined( 'YITH_WOCC_PREMIUM' ) ) {
		add_action( 'admin_notices', 'yith_wocc_install_free_admin_notice' );
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}
	else {
		do_action( 'yith_wocc_free_init' );
	}
}
add_action( 'plugins_loaded', 'yith_wocc_free_install', 11 );