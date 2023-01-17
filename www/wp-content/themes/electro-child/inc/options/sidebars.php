<?php
use Digidez\Functions;

return array(
	array(
		'name'          => __('Menu Bar', THEME_TD),
		'id'            => 'menu-bar',
		'description'   => 'Menu Bar widget area',
		'before_widget' => '<li id="%1$s" class="menu-item widget">',
		'after_widget'  => '</li>',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	),
	array(
		'name'          => __('Shop Flat Sidebar', THEME_TD),
		'id'            => 'shop-flat-sidebar',
		'description'   => 'Shop Flat sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('Right Sidebar', THEME_TD),
		'id'            => 'right-sidebar',
		'description'   => 'Right sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('Left Sidebar', THEME_TD),
		'id'            => 'left-sidebar',
		'description'   => 'Left sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('Hero Slider', THEME_TD),
		'id'            => 'hero',
		'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
		'before_widget' => '<div class="carousel-item">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	),
	array(
		'name'          => __('Hero Static', THEME_TD),
		'id'            => 'statichero',
		'description'   => 'Static Hero widget. no slider functionallity',
		'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s '.Functions::slbd_count_widgets('statichero').'">',
		'after_widget'  => '</div><!-- .static-hero-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('After product tabs sidebar', THEME_TD),
		'id'            => 'after-product-tabs-widget',
		'description'   => 'Widget area in product page',
		'before_widget' => '<div class="after-product-tabs-widget"><aside id="%1$s" class="widget clearfix %2$s"><div class="body">',
		'after_widget' 	=> '</div></aside></div>',
		'before_title' 	=> '<h4 class="widget-title">',
		'after_title' 	=> '</h4>',
	),
	array(
		'name'          => __('Footer bottom Full sidebar', THEME_TD),
		'id'            => 'footer-bottom-widget-full',
		'description'   => 'Widget area in site footer',
		'before_widget' => '<div class="columns"><aside id="%1$s" class="widget clearfix %2$s"><div class="body">',
		'after_widget' 	=> '</div></aside></div>',
		'before_title' 	=> '<h4 class="widget-title">',
		'after_title' 	=> '</h4>',
	),
	array(
		'name'          => __('Footer Col 1', THEME_TD),
		'id'            => 'footer_col_1',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s '.Functions::slbd_count_widgets('footer_col_1').'">',
		'after_widget'  => '</div><!-- .footer-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('Footer Col 2', THEME_TD),
		'id'            => 'footer_col_2',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s '.Functions::slbd_count_widgets('footer_col_2').'">',
		'after_widget'  => '</div><!-- .footer-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),
	array(
		'name'          => __('Footer Col 3', THEME_TD),
		'id'            => 'footer_col_3',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s '.Functions::slbd_count_widgets('footer_col_3').'">',
		'after_widget'  => '</div><!-- .footer-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	),

);