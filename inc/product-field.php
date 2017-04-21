<?php
// Display Fields
add_action( 'woocommerce_product_options_advanced', 'derweiliPreOrderAdditionalProductField' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'derweiliPreOrderAdditionalProductFieldSave' );


function derweiliPreOrderAdditionalProductField() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  
  // Custom fields will be created here...
    // Checkbox

	?>
    <p class="form-field custom_field_type">
        <label for="derweili_preorder_date"><?php echo __( 'PreOrder Date', 'derweili-preorder' ); ?><br></label>
        <span class="wrap">
            <?php 
                $derweili_preorder_date = get_post_meta( $post->ID, '_derweili_preorder_date', true );
                $derweili_preorder_placeholder = date('Y-m-d');
            ?>	
            <input placeholder="<?php echo $derweili_preorder_placeholder; ?>" class="" type="date" name="_derweili_preorder_date" value="<?php echo $derweili_preorder_date[0]; ?>" attr-value="<?php echo $derweili_preorder_date[0]; ?>" style="" />
        </span>
        <span class="description"><?php _e( 'Release Date', 'derweili-pre-sale' ); ?> <small><?php _e('Leave empty to disable PreOrder', 'derweili-pre-sale'); ?></small></span>
    </p>

    <?php

  echo '</div>';
	
}


function derweiliPreOrderAdditionalProductFieldSave( $post_id ){
		
	// Custom Field
	$derweili_preorder_date =  array( esc_attr( $_POST['_derweili_preorder_date'] ), esc_attr( $_POST['_derweili_preorder_date'] ) );
	update_post_meta( $post_id, '_derweili_preorder_date', $derweili_preorder_date );
	
}