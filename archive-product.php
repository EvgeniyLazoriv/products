<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?> 
<?php
	if ( woocommerce_product_loop() ) {
		do_action( 'woocommerce_before_shop_loop' );
		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

				do_action( 'woocommerce_shop_loop' );

				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();

		do_action( 'woocommerce_after_shop_loop' );
	} else {

		do_action( 'woocommerce_no_products_found' );
	} ?>
	<div class="products-right__bottom">
		<div class="pagination">
			<a href="#" class="pagination__arrow disabled">
				<svg width="9" height="17" viewbox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.81253 15L15 27.1875V30L-5.65728e-09 15L15 0V2.81248L2.81253 15Z"
						fill="#434343" />
				</svg>
				Назад
			</a>
			<ul class="pagination-list">
				<li class="pagination-list__item active">
					<a href="#">1</a>
				</li>
				<li class="pagination-list__item">
					<a href="#">2</a>
				</li>
				<li class="pagination-list__item">
					<a href="#">3</a>
				</li>
				<li class="pagination-list__item">
					<a href="#">4</a>
				</li>
				<li class="pagination-list__item">
					<a href="#">5</a>
				</li>
			</ul>
			<a href="#" class="pagination__arrow">
				Вперед
				<svg width="9" height="17" viewbox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.6875 15L0.5 27.1875V30L15.5 15L0.5 0V2.81248L12.6875 15Z" fill="#434343" />
				</svg>
			</a>
		</div>
	</div>

	<?php


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<header class="woocommerce-products-header">

		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );

?>
