<?php


add_action( 'woocommerce_single_product_summary', 'derweiliPreOrderProductSummaryInfo', 10 );

function derweiliPreOrderProductSummaryInfo( $post_id ) {

    global $post;
    
    if( $preSaleDate = derweiliPrepOrderIsInPrepOrder( $post->ID ) ){


        $preSaleInfoText = apply_filters( 'derweiliPreOrderProductSummaryInfoText', __( 'Available from', 'derweili-preorder') . ' ' . date( 'd.m.Y', $preSaleDate ), $post->ID, $preSaleDate );

        ?>

            <p class="preorder-info">
                <strong><?php echo $preSaleInfoText ?></strong>
            </p>

        <?php

    }

}