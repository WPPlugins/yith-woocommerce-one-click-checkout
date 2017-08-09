<?php
/**
 * One-Click Checkout Template
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * @type $product \WC_Product
 */
$product_id = $product->get_id();

?>

<div class="clear"></div>
<div class="yith-wocc-wrapper">

	<?php do_action( 'yith_wocc_before_one_click_button' ); ?>

    <div class="yith-wocc-button-container">
        <input type="hidden" name="_yith_wocc_one_click" value />
        <?php if( $product->is_type( array( 'simple' ) ) ) : ?>
            <button type="submit" class="yith-wocc-button button" name="add-to-cart" value="<?php echo $product_id ?>">
        <?php else : ?>
            <button type="submit" class="yith-wocc-button button">
            <?php endif; ?>
                <span class="button-label"><?php echo $label ?></span>
            </button>
    </div>

	<?php do_action( 'yith_wocc_after_one_click_button' ); ?>

</div>