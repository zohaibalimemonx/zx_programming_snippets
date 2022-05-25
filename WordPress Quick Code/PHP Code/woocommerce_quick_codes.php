<?php

/* * * * * GET PRODUCT SUMMARY i.e. TITLE, ADD-TO-CART, VARIATIONS ETC. * * * * */

// Used In While Loop For Each Product

/**
 * woocommerce_single_product_summary hook
 *
 * @hooked woocommerce_template_single_title - 5
 * @hooked woocommerce_template_single_rating - 10
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 */
do_action( 'woocommerce_single_product_summary' );

// FOR Any Unwanted Detail Just Remove That Action As Should Be Placed Before do_action('woocommerce_single_product_summary);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
// In Woodmart The Priority Of woocommerce_template_single_excerpt is 30
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

?>

<?php

/* * * * * GET PRODUCT PRICE BY ID * * * * */

// IDs
$id_one = 242;
$id_two = 243;

// Load Full Product Object By ID
$product_one = wc_get_product( $id_one );
$product_two = wc_get_product( $id_two );

// Calling Price Function
echo $product_one->get_price();
echo $product_two->get_price();

?>

<?php

/* * * * * GET EXTERNAL PRODUCT's EXTERNAL URL BY ID * * * * */

    // Load Full Product Object By ID
    $aff_product_meta = wc_get_product(get_the_ID());

    if( $aff_product_meta->is_type( 'external' ) ):
        echo $aff_product_meta->get_product_url();
    endif;

?>