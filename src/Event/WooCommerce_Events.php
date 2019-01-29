<?php
declare( strict_types=1 );

namespace Rarst\Laps\Event;

/**
 * Events for WooCommerce plugin
 */
class WooCommerce_Events implements Hook_Event_Config_Interface {

	/**
	 * @return array
	 */
	public function get_events(): array {

		return class_exists( 'WooCommerce' ) ? [
			[ 'WooCommerce Init', 'plugin', 'before_woocommerce_init', 'woocommerce_init' ],
			[ 'WooCommerce Shop Loop', 'plugin', 'woocommerce_before_shop_loop', 'woocommerce_after_shop_loop' ],
			[ 'WooCommerce Single Product', 'plugin', 'woocommerce_before_single_product', 'woocommerce_after_single_product' ],
			[ 'WooCommerce Cart', 'plugin', 'woocommerce_before_cart', 'woocommerce_after_cart' ],
			[ 'WooCommerce Checkout', 'plugin', 'woocommerce_before_checkout_form', 'woocommerce_after_checkout_form' ],
		] : [];
	}
}