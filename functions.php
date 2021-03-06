<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


    
function instagram_widget_init() {

	register_sidebar( array(
		'name'          => 'Instagram',
		'id'            => 'instagram',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'instagram_widget_init' );

function testimonials_init() {

	register_sidebar( array(
		'name'          => 'testimonials',
		'id'            => 'testimonials',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'testimonials_init' );



function storefront_credit() {
    ?>
    <div class="site-info">
		<p class="ollie">All Rights Reserved &copy; Oils O'Ollie <?php echo date_i18n( date('Y') ); ?>
		<p class="upply">Built by <a href="https://upply.io">Upply.io</a></p>
    </div>
    <?php
}

?>