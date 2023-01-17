<?php
/**
 * The template for displaying 404 pages (not found)
 * @package electro
 */
electro_get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row">
				<div class="col-sm-12 center-block">
					<div class="info-404">
						<div class="text-xs-center inner-bottom-xs">
							<h2 class="display-3"><?=__('404!', 'electro');?></h2>
							<p class="lead"><?=__('Nothing was found at this location. Try searching, or check out the links below.', 'electro');?></p>
							<p class="lead"><?=__('Product not found additional text', THEME_TD);?></p>
							<hr class="m-y-2">
							<div class="sub-form-row inner-bottom-xs">
								<?php
								if(is_woocommerce_activated()){
									the_widget('WC_Widget_Product_Search');
								}else{
									get_search_form();
								}
								?>
							</div>
						</div>
						<div class="useful-links"><?php
							if(is_woocommerce_activated()){
								echo '<div class="row">';
								echo '<div class="col-xs-12 col-sm-8">';
								electro_promoted_products(3, 3);
								echo '</div>';
								echo '<section class="col-xs-12 col-sm-4">';
								echo '<header><h2 class="h1">'.esc_html__('Product Categories', 'electro').'</h2></header>';
								the_widget('WC_Widget_Product_Categories', array('count' => 1, 'hide_empty' => true));
								echo '</section>';
								echo '</div>';
								echo '<section>';
								echo '<header><h2 class="h1">'.esc_html__('Popular Products', 'electro').'</h2></header>';
								echo electro_do_shortcode('best_selling_products', array('per_page' => 4, 'columns' => 4));
								echo '</section>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();