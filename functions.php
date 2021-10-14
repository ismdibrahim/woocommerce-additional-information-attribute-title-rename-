/**
 * Check if product has attributes, dimensions or weight to override the call_user_func() expects parameter 1 to be a valid callback error when changing the additional tab
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );

function woo_rename_tabs( $tabs ) {

	global $product;
	
	if( $product->has_attributes() || $product->has_dimensions() || $product->has_weight() ) { // Check if product has attributes, dimensions or weight
		$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
	}
 
	return $tabs;
 
} 
