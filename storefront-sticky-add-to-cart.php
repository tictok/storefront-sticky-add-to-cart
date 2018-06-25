<?php
/**
 * Plugin Name:			Storefront Sticky Add to Cart
 * Plugin URI:			https://wordpress.org/plugins/storefront-sticky-add-to-cart/
 * Description:			Adds a sticky add-to-cart bar in single product pages that is revealed as the user scrolls down the page.
 * Version:				1.1.8
 * Author:				WooThemes
 * Author URI:			http://woothemes.com/
 * Requires at least:	4.0.0
 * Tested up to:		4.8.2
 *
 * Text Domain: storefront-sticky-add-to-cart
 * Domain Path: /languages/
 *
 * @package Storefront_Sticky_Add_to_Cart
 * @category Core
 * @author James Koster
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Returns the main instance of Storefront_Sticky_Add_to_Cart to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Storefront_Sticky_Add_to_Cart
 */
function storefront_sticky_add_to_cart() {
	return Storefront_Sticky_Add_to_Cart::instance();
} // End Storefront_Sticky_Add_to_Cart()

/**
 * Only load plugin if Storefront version is under 2.3.0.
 *
 * @since 1.1.9
 * @return void
 */
function storefront_sticky_add_to_cart_init() {
	global $storefront_version;

	if ( class_exists( 'Storefront' ) && version_compare( $storefront_version, '2.3.0', '<' ) ) {
		require 'classes/class-storefront-sticky-add-to-cart.php';

		storefront_sticky_add_to_cart();
	}
} // end storefront_sticky_add_to_cart_init()

add_action( 'init', 'storefront_sticky_add_to_cart_init' );