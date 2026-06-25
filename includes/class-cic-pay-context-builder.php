<?php
/**
 * Monetico order context builder scaffold.
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Builds the Monetico order context payload.
 */
class CIC_Pay_Context_Builder {

	/**
	 * Build the encoded order context.
	 *
	 * @param WC_Order $order WooCommerce order.
	 */
	public function build( WC_Order $order ): string {
		unset( $order );

		return '';
	}
}
