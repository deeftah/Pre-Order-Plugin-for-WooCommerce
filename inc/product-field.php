<?php
// Display Fields
add_action( 'woocommerce_product_options_advanced', 'derweiliPreSaleAdditionalProductField' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'derweiliPreSaleAdditionalProductFieldSave' );


function derweiliPreSaleAdditionalProductField() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  
  // Custom fields will be created here...
    // Checkbox

	?>
    <p class="form-field custom_field_type">
        <label for="derweili_presale_date"><?php echo __( 'PreSale Date', 'woocommerce' ); ?><br></label>
        <span class="wrap">
            <?php 
                $derweili_presale_date = get_post_meta( $post->ID, '_derweili_presale_date', true );
                $derweili_presale_placeholder = date('Y-m-d');
            ?>	
            <input placeholder="<?php echo $derweili_presale_placeholder; ?>" class="" type="date" name="_derweili_presale_date" value="<?php echo $derweili_presale_date[0]; ?>" attr-value="<?php echo $derweili_presale_date[0]; ?>" style="" />
          <!--  <input placeholder="<?php _e( 'Field Two', 'woocommerce' ); ?>" type="number" name="_field_two" value="<?php echo $custom_field_type[1]; ?>" step="any" min="0" style="width: 80px;" />-->
        </span>
        <span class="description"><?php _e( 'Release Date', 'woocommerce' ); ?> <small>Leave empty to disable PreSale</small></span>
    </p>

    <?php

  echo '</div>';
	
}


function derweiliPreSaleAdditionalProductFieldSave( $post_id ){
		
	// Custom Field
	$derweili_presale_date =  array( esc_attr( $_POST['_derweili_presale_date'] ), esc_attr( $_POST['_derweili_presale_date'] ) );
	update_post_meta( $post_id, '_derweili_presale_date', $derweili_presale_date );
	
}