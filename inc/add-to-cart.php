<?php

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // < 2.1

function woo_custom_cart_button_text( $buttonText ) {
    
    //return __( 'Jetzt vorbestellen', 'woocommerce' );

    global $post;
    global $product;

        $derweili_presale_date = get_post_meta( $post->ID, '_derweili_presale_date', true );
        
        //var_dump($derweili_presale_date);

        if( ! $derweili_presale_date )
            return $buttonText;
        
        $derweili_presale_date = strtotime($derweili_presale_date[0]);
    
        if( ! $derweili_presale_date )
            return $buttonText;

        if( date('U') > $derweili_presale_date )
            return $buttonText;

        return __( 'Jetzt vorbestellen', 'woocommerce' );
 
}