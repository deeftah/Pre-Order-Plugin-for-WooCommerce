<?php


function derweiliPrepOrderIsInPrepOrder( $product_id = null ) {

    if( null != $product_id ){
        global $post;
        $product_id = $post->ID;
    }
    
    $derweili_preorder_date = get_post_meta( $product_id, '_derweili_preorder_date', true );

    if( ! $derweili_preorder_date )
        return false;
    
    $derweili_preorder_date = strtotime($derweili_preorder_date[0]);

    if( ! $derweili_preorder_date )
        return false;

    if( date('U') > $derweili_preorder_date )
        return false;

    return $derweili_preorder_date;


}