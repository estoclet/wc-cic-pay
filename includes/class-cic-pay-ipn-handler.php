<?php
/**
 * Monetico IPN handler scaffold.
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handles Monetico payment notifications.
 */
class CIC_Pay_IPN_Handler {

	/**
	 * Initialize the IPN handler.
	 *
	 * @param CIC_Pay_MAC_Service $mac_service MAC service.
	 */
	public function __construct( private CIC_Pay_MAC_Service $mac_service ) {
	}

	/**
	 * Handle the incoming IPN request.
	 */
	public function handle(): void {
	}
}
