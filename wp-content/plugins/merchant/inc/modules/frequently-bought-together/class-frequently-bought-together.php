<?php

/**
 * Frequently Bought Together
 *
 * Module's entry class.
 *
 * @package Merchant
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frequently Bought Together Class.
 */
class Merchant_Frequently_Bought_Together extends Merchant_Add_Module {

	/**
	 * Module ID..
	 */
	const MODULE_ID = 'frequently-bought-together';

	/**
	 * Module template path.
	 */
	const MODULE_TEMPLATES_PATH = 'modules/' . self::MODULE_ID;

	/**
	 * Is module preview.
	 *
	 */
	public static $is_module_preview = false;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// Module id.
		$this->module_id = self::MODULE_ID;

		// WooCommerce only.
		$this->wc_only = true;

		// Module default settings.
		$this->module_default_settings = array(
			'no_variation_selected_text_has_no_discount' => __( 'Please select an option to see the total price.', 'merchant' ),
			'no_variation_selected_text' => __( 'Please select an option to see your savings.', 'merchant' ),
		);

		// Parent construct.
		parent::__construct();

		// Module section.
		$this->module_section = 'boost-revenue';

		// Module data.
		$this->module_data = Merchant_Admin_Modules::$modules_data[ self::MODULE_ID ];

		// Module preview URL
		$this->module_data['preview_url'] = $this->set_module_preview_url( array(
			'type'  => 'product',
			'query' => array(
				// phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
				'meta_query' => array(
					'relation' => 'AND',
					array(
						'key'     => '_merchant_frequently_bought_together_bundles',
						'value'   => '',
						'compare' => '!=',
					),
					array(
						'key'     => '_merchant_frequently_bought_together_bundles',
						'value'   => 'a:0:{}',
						'compare' => '!=',
					),
				),
			),
		) );

		// Module options path.
		$this->module_options_path = MERCHANT_DIR . 'inc/modules/' . self::MODULE_ID . '/admin/options.php';

		if ( Merchant_Modules::is_module_active( self::MODULE_ID ) && is_admin() ) {
			// Init translations.
			$this->init_translations();
		}

		// Is module preview page.
		if ( is_admin() && parent::is_module_settings_page() ) {
			self::$is_module_preview = true;

			// Enqueue admin styles.
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_css' ) );

			// Admin preview box.
			add_filter( 'merchant_module_preview', array( $this, 'render_admin_preview' ), 10, 2 );

			// Custom CSS.
			// The custom CSS should be added here as well due to ensure preview box works properly.
			add_filter( 'merchant_custom_css', array( $this, 'admin_custom_css' ) );
		}
	}

	/**
	 * Init translations.
	 *
	 * @return void
	 */
	public function init_translations() {
		$settings = $this->get_module_settings();
		if ( ! empty( $settings['title'] ) ) {
			Merchant_Translator::register_string( $settings['title'], esc_html__( 'Frequently bought together: title', 'merchant' ) );
		}
		if ( ! empty( $settings['price_label'] ) ) {
			Merchant_Translator::register_string( $settings['price_label'], esc_html__( 'Frequently bought together: price label', 'merchant' ) );
		}
		if ( ! empty( $settings['save_label'] ) ) {
			Merchant_Translator::register_string( $settings['save_label'], esc_html__( 'Frequently bought together: save label', 'merchant' ) );
		}
		if ( ! empty( $settings['no_variation_selected_text'] ) ) {
			Merchant_Translator::register_string( $settings['no_variation_selected_text'], esc_html__( 'Frequently bought together: no variation selected text', 'merchant' ) );
		}
		if ( ! empty( $settings['no_variation_selected_text_has_no_discount'] ) ) {
			Merchant_Translator::register_string( $settings['no_variation_selected_text_has_no_discount'], esc_html__( 'Frequently bought together: no variation selected text (no discount)', 'merchant' ) );
		}
		if ( ! empty( $settings['button_text'] ) ) {
			Merchant_Translator::register_string( $settings['button_text'], esc_html__( 'Frequently bought together: button text', 'merchant' ) );
		}
	}

	/**
	 * Admin enqueue CSS.
	 *
	 * @return void
	 */
	public function admin_enqueue_css() {
		if ( parent::is_module_settings_page() ) {
			wp_enqueue_style( 'merchant-' . self::MODULE_ID, MERCHANT_URI . 'assets/css/modules/' . self::MODULE_ID . '/frequently-bought-together.min.css', array(), MERCHANT_VERSION );
			wp_enqueue_style( 'merchant-admin-' . self::MODULE_ID, MERCHANT_URI . 'assets/css/modules/' . self::MODULE_ID . '/admin/preview.min.css', array(), MERCHANT_VERSION );
		}
	}

	/**
	 * Render admin preview
	 *
	 * @param Merchant_Admin_Preview $preview
	 * @param string $module
	 *
	 * @return Merchant_Admin_Preview
	 */
	public function render_admin_preview( $preview, $module ) {
		if ( $module === self::MODULE_ID ) {

			$preview->set_html( array( $this, 'admin_preview_content' ), $this->get_module_settings() );

			$preview->set_text( 'title', '.merchant-frequently-bought-together-title' );
			$preview->set_text( 'price_label', '.merchant-frequently-bought-together-bundle-total' );
			$preview->set_text( 'save_label', '.merchant-frequently-bought-together-bundle-save', array(
				array(
					'{amount}',
				),
				array(
					wc_price( 12 ),
				),
			) );
			$preview->set_text( 'button_text', '.merchant-add-bundle-to-cart' );
			$preview->set_css( 'plus_bg_color', '.merchant-frequently-bought-together-bundle-product-plus', '--merchant-bg-color' );
			$preview->set_css( 'plus_text_color', '.merchant-frequently-bought-together-bundle-product-plus', '--merchant-text-color' );
			$preview->set_css( 'bundle_border_color', '.merchant-frequently-bought-together-bundle-product', '--merchant-border-color' );
			$preview->set_css( 'bundle_border_radius', '.merchant-frequently-bought-together-bundle-product', '--merchant-border-radius', 'px' );
		}

		return $preview;
	}

	/**
	 * Admin preview content.
	 *
	 * @param array $settings
	 *
	 * @return void
	 */
	public function admin_preview_content( $settings ) {
		echo wp_kses( merchant_get_template_part(
			self::MODULE_TEMPLATES_PATH,
			'single-product',
			array(
				'bundles'  => array(
					10 => array(
						array(
							'discount_value'         => 20,
							'products'               => array(
								array(
									'id'         => 97,
									'image'      => '<img src="' . MERCHANT_URI . 'assets/images/dummy/Glamifiedpeach.jpeg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">',
									'title'      => 'Eternal Sunset Collection Lip and Cheek',
									'price_html' => wc_price( 12 ),
									'price'      => 12,
									'permalink'  => '#',
								),
								array(
									'id'         => 96,
									'image'      => '<img src="' . MERCHANT_URI . 'assets/images/dummy/Pearlville.jpeg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">',
									'title'      => 'Vinopure Pore Purifying Gel Cleanser',
									'price_html' => wc_price( 14 ),
									'price'      => 14,
									'permalink'  => '#',
								),
							),
							'layout'                 => 'percentage_discount',
							'total_products'         => 3,
							'total_price'            => 47,
							'total_discount'         => 12,
							'total_product_discount' => 4,
							'total_discounted_price' => 35,
						),
					),
				),
				'nonce'    => '',
				'settings' => $settings,
			),
			true
		),
			merchant_kses_allowed_tags() );
	}

	/**
	 * Custom CSS.
	 *
	 * @return string
	 */
	public function get_module_custom_css() {
		$css = '';

		$css .= Merchant_Custom_CSS::get_variable_css( $this->module_id, 'plus_bg_color', '#212121', '.merchant-frequently-bought-together-bundle-product-plus', '--merchant-bg-color' );
		$css .= Merchant_Custom_CSS::get_variable_css( $this->module_id, 'plus_text_color', '#fff', '.merchant-frequently-bought-together-bundle-product-plus', '--merchant-text-color' );
		$css .= Merchant_Custom_CSS::get_variable_css( $this->module_id, 'bundle_border_color', '#ededed', '.merchant-frequently-bought-together-bundle-product', '--merchant-border-color' );
		$css .= Merchant_Custom_CSS::get_variable_css( $this->module_id, 'bundle_border_radius', 5, '.merchant-frequently-bought-together-bundle-product', '--merchant-border-radius', 'px' );

		return $css;
	}

	/**
	 * Admin custom CSS.
	 *
	 * @param string $css The custom CSS.
	 *
	 * @return string $css The custom CSS.
	 */
	public function admin_custom_css( $css ) {
		$css .= $this->get_module_custom_css();

		return $css;
	}
}

// Initialize the module.
add_action( 'init', function () {
	Merchant_Modules::create_module( new Merchant_Frequently_Bought_Together() );
} );
