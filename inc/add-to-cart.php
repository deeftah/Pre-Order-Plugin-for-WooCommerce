<?php

add_filter( 'woocommerce_product_single_add_to_cart_text', 'derweiliPreOrderAddToCartButton' );    // < 2.1

function derweiliPreOrderAddToCartButton( $buttonText ) {
    
    global $post;
    global $product;

    if( false == $preSaleDate = derweiliPrepOrderIsInPrepOrder( $post->ID ) ) return $buttonText;

    return __( 'Pre-order now', 'derweili-preorder' );

}