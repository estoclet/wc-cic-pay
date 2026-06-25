<?php
declare( strict_types=1 );

use PHPUnit\Framework\TestCase;

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/../../' );
}

if ( ! function_exists( '__' ) ) {
	function __( string $text, string $domain = 'default' ): string {
		unset( $domain );

		return $text;
	}
}

if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
	class WC_Payment_Gateway {
		public string $id = '';

		public bool $has_fields = false;

		public string $method_title = '';

		public string $method_description = '';

		/**
		 * @var array<int, string>
		 */
		public array $supports = array();

		/**
		 * @var array<string, mixed>
		 */
		public array $form_fields = array();

		public string $title = '';

		public function init_settings(): void {
		}

		public function get_option( string $key, mixed $default = null ): mixed {
			unset( $key );

			return $default;
		}
	}
}

require_once dirname( __DIR__, 2 ) . '/includes/class-cic-pay-gateway.php';

final class ScaffoldTest extends TestCase {

	public function test_gateway_scaffold_uses_monetico_id_without_checkout_availability(): void {
		$gateway = new CIC_Pay_Gateway();

		self::assertSame( 'monetico', $gateway->id );
		self::assertSame( 'CIC Pay', $gateway->method_title );
		self::assertSame( array( 'products' ), $gateway->supports );
		self::assertFalse( $gateway->is_available() );
	}
}
