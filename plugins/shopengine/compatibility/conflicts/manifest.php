<?php

namespace ShopEngine\Compatibility\Conflicts;

use ShopEngine\Widgets\Widget_Helper;

class Manifest {

	public function init() {
		
		add_action('elementor/element/before_section_start', [$this, 'elementor_editor_conflict'], 10, 2);
		add_action('elementor/element/before_section_start', function ($element) {

			/**
			 * In woodmart theme image with gallery does not work properly. so temporary fix
			 * Hooks tried are -
			 * 	 elementor/editor/before_enqueue_scripts
			 * 	 elementor/element/before_section_start
			 * 	 elementor/element/after_section_end
			 */
			wp_enqueue_script('flexslider');

			/**
			 * remove unwanted breadcrumb in shop and archive page
			 */
			remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

			global $is_used_shopengine_template;
			if($is_used_shopengine_template) {
				remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
			}
		}, 9000, 1);


		// Check if the Yith Delivery Date Plugin Is There
		if(class_exists('\YITH_Delivery_Date_Shipping_Manager')){

			// They added this action specifically after 2.7.0 version so we need to check if we are using 2.7.0 or higher
			if ( version_compare( WC()->version, '2.7.0', '>=' ) ) {

				$yith_date_manager = \YITH_Delivery_Date_Shipping_Manager::get_instance();

				// Remove the actual action that used by Yith.
				remove_action( 'woocommerce_checkout_shipping', array( $yith_date_manager, 'print_delivery_from' ), 20 );

				// Invoked their own method to print delivery from
				add_action( 'woocommerce_after_order_notes', array( $yith_date_manager, 'print_delivery_from' ), 20 );
			}
		}
		
	}	

	public function elementor_editor_conflict($element, $section_id) {

		$in_editor_mode = \Elementor\Plugin::$instance->editor->is_edit_mode();

		if('shopengine-cross-sells' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_in_elementor_editor_cross_sells();

		} elseif('shopengine-related' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_in_elementor_editor_related_products();

		} elseif('shopengine-account-dashboard' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_my_account_page();

		} elseif('shopengine-cart-table' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_empty_cart_page();

		} elseif('shopengine-archive-products' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_in_editor__archive_products_widget();

		} elseif('shopengine-product-tabs' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_in_editor__product_tabs_widget();

		} elseif('shopengine-up-sells' === $element->get_name() && $in_editor_mode) {

			Theme_Hooks::instance()->theme_conflicts_in_elementor_editor_up_sells();
		}
	}
}
