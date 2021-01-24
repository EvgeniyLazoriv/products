<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'products-right__item card', $product ); ?>>
	<div class="card__top">
		<span class="card__cod">
			Код: 128238988
		</span>
		<div class="promotion">
			<button class="promotion__item card__favorite">
				<svg width="28" height="26" viewbox="0 0 28 26" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M20.7084 0.166626C17.6025 0.166626 15.0374 3.05139 14 4.41289C12.9626 3.05139 10.3975 0.166626 7.29165 0.166626C3.27102 0.166626 0 3.86317 0 8.40623C0 10.8848 0.983828 13.1948 2.70588 14.7756C2.73093 14.8189 2.76172 14.8588 2.79759 14.8947L13.5881 25.663C13.7021 25.7763 13.8508 25.8333 14 25.8333C14.1492 25.8333 14.2985 25.7763 14.4125 25.6624L25.5619 14.517L25.6769 14.4053C25.7681 14.3193 25.8581 14.2321 25.9589 14.1205C26.0011 14.079 26.0358 14.0322 26.0626 13.9815C27.313 12.4503 28 10.4752 28 8.40623C28 3.86317 24.729 0.166626 20.7084 0.166626ZM25.0919 13.3253C25.0759 13.3441 25.0611 13.364 25.048 13.3845C24.9933 13.4472 24.9335 13.5024 24.8743 13.5588L13.9995 24.4257L3.75523 14.202C3.7222 14.137 3.67604 14.0778 3.61966 14.0282C2.06046 12.6667 1.16665 10.6176 1.16665 8.40623C1.16665 4.5063 3.91415 1.33333 7.29165 1.33333C10.631 1.33333 13.481 5.68897 13.5095 5.73283C13.7249 6.06549 14.2751 6.06549 14.4905 5.73283C14.519 5.68897 17.369 1.33333 20.7084 1.33333C24.0859 1.33333 26.8334 4.50635 26.8334 8.40623C26.8334 10.2439 26.2147 11.9911 25.0919 13.3253Z"
						fill="#B2B2B2" />
				</svg>
			</button>
			<button class="promotion__item card__compare">
				<svg width="28" height="28" viewbox="0 0 28 28" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M27.9524 14.2321L27.9286 14.244L23.9116 4.24617H25.7445C26.0732 4.24617 26.3396 3.97971 26.3396 3.65106C26.3396 3.32241 26.0732 3.05595 25.7445 3.05595H14.5445V1.33608C14.5445 1.00743 14.2781 0.740967 13.9494 0.740967C13.6208 0.740967 13.3543 1.00743 13.3543 1.33608V3.05H2.16026C1.8316 3.05 1.56514 3.31646 1.56514 3.64511C1.56514 3.97376 1.8316 4.24022 2.16026 4.24022H4.07056L0.0476089 14.2321C0.0178533 14.3018 0.00171095 14.3766 0 14.4523C0 17.1852 2.21545 19.4007 4.94835 19.4007C7.68125 19.4007 9.89671 17.1852 9.89671 14.4523C9.89499 14.3766 9.87885 14.3018 9.8491 14.2321L5.83209 4.23427H13.3543V22.6351C10.5156 22.8494 8.29586 24.5752 8.29586 26.664C8.29586 26.9927 8.56232 27.2591 8.89097 27.2591H19.0079C19.3365 27.2591 19.603 26.9927 19.603 26.664C19.603 24.5752 17.3832 22.8494 14.5445 22.6351V4.23427H22.1441L18.1509 14.2321C18.1211 14.3018 18.105 14.3766 18.1033 14.4523C18.1033 17.1852 20.3187 19.4007 23.0516 19.4007C25.7845 19.4007 28 17.1852 28 14.4523C27.9983 14.3766 27.9821 14.3018 27.9524 14.2321ZM4.94538 18.2194C3.10217 18.2169 1.53241 16.8789 1.23783 15.0594H8.62912C8.33603 16.8701 6.77959 18.2053 4.94538 18.2194ZM8.41488 13.8691H1.48778L4.95728 5.23406L8.41488 13.8691ZM18.3056 26.0689H9.58725C10.0276 24.7894 11.8427 23.8015 13.9435 23.8015C16.0442 23.8015 17.8653 24.7894 18.3056 26.0689ZM23.0249 5.24001L26.4825 13.8691H19.5554L23.0249 5.24001ZM23.0249 18.2194V18.2253C21.1887 18.2107 19.6316 16.8724 19.3411 15.0594H26.7324C26.4378 16.8789 24.8681 18.2169 23.0249 18.2194Z"
						fill="#B2B2B2" />
				</svg>
			</button>
		</div>
	<?php 
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>
	</div>

	<?php

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>


</li>
