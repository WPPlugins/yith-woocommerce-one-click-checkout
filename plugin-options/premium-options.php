<?php
/**
 * Main admin class
 *
 * @author Your Inspiration Themes
 * @package YITH Woocommerce Compare
 * @version 1.1.1
 */

if ( ! defined( 'YITH_WOCC' ) ) {
    exit;
} // Exit if accessed directly

$options = array(
    'premium' => array(
        'landing' => array(
            'type' => 'custom_tab',
            'action' => 'yith_wocc_premium'
        )
    )
);

return $options;
