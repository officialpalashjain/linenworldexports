<?php 
/* Template Name: Home Template */ 
get_header();


$home_page_silder = CFS()->get( 'home_page_silder' );
$second_section = CFS()->get( 'second_section' );
$certification_section = CFS()->get( 'certification_section' );
$shipping_services = CFS()->get( 'shipping_services' );
$footer_section_heading = CFS()->get( 'footer_section_heading' );
$footer_section_content = CFS()->get( 'footer_section_content' );
$footer_section_image = CFS()->get( 'footer_section_image' );
$footer_section_form = CFS()->get( 'footer_section_form' );
?>
<section>
	<div class="container-fluid pleft pright">
		<div id="themeSlider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#themeSlider" data-slide-to="0" class=""></li>
				<li data-target="#themeSlider" data-slide-to="1" class=""></li>
				<li data-target="#themeSlider" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<?php 
				if($home_page_silder) {
					foreach ($home_page_silder as $k => $v) { ?>
						<div class="item <?php if(!$k) { echo 'active'; } ?>">
							<div class="imgOverlay"></div>
							<img src="<?php echo $v['slider_image']; ?>" alt="<?php echo $k; ?>  slide">
							<div class="carousel-caption wow fadeInUp animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
								<h1><span><?php echo $v['slider_heading']; ?></span></h1>
								<p class="text-center whitecolor"><?php echo $v['slider_content']; ?></p>
								<p class="text-center"><a href="<?php echo $v['slider_button_1_link']; ?>" class="ready wtbg"><?php echo $v['slider_button_1_text']; ?></a> <a href="<?php echo $v['slider_button_2_link']; ?>" class="ready"><?php echo $v['slider_button_2_text']; ?></a></p>
								<p class="otherdevic"></p>
								<p></p>
								<p></p>
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</div>
</section>
<section class="fourroundbox wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<?php
			if(!empty($second_section))
			{
				foreach ($second_section as $k => $v)
				{
					$image = $v['image'];
					echo '<img " src="'.$image.'" class="adp"/>';
				}
			}
			?>
		</div>
	</div>
</section>
<!-- close -->
<section class="greysection wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span>PRODUCTS RANGE</span></h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidercarsoul">
			<div id="news-slider" class="owl-carousel">
				<?php
				$cat_args = array(
				    'orderby'       => 'term_id', 
				    'order'         => 'ASC',
				    'hide_empty'    => false, 
				);

				$terms = get_terms('product-categories', $cat_args);
				if($terms) {
		    		foreach($terms as $term) {
		    			$term_id = $term->term_id;
		    			$cat_name = $term->name;
		    			$cat_link = get_term_link($term_id);
		    			echo '<div class="post-slide1 prob">';
		    			echo '<a href="'.$cat_link.'">';

		    			if (function_exists('z_taxonomy_image_url')) {
		    				$img =  z_taxonomy_image_url($term_id);
		    				echo '<div class="probb">
								<img src="'.$img.'" class="proimg">
							</div>';
		    			}
		    			echo '<h3>'.$cat_name.'</h3>';
		    			echo '</a></div>';
		    		}
		    	}
				?>
			</div>
		</div>
	</div>
</section>
<!-- close property -->
<section class="fourroundbox wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span>Certifications</span></h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blueline-left.png" class="blueline-left">
			<?php
			if(!empty($certification_section))
			{
				foreach ($certification_section as $k => $v)
				{
					$image = $v['image'];
					echo '<img src="'.$image.'" class="adp"/>';
				}
			}
			?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blueline-right.png" class="blueline-right">
		</div>
	</div>
</section>
<!-- close -->
<section class="shippingarea wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span>What Sets Us Apart?</span></h1>
		</div>
		<?php
		if(!empty($shipping_services))
		{
			$html = '';
			foreach ($shipping_services as $k => $v)
			{
				$icon = $v['icon'];
				$title = $v['title'];
				$description = $v['description'];
				$html .= '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
					$html .= '<div class="shipicon"><img src="'.$icon.'" /></div>';
					$html .= '<div class="shipcont">';
						$html .= '<h2>'.$title.'</h2>';
						$html .= '<p class="sipp">'.$description.'</p>';
					$html .= '</div>';
				$html .= '</div>';
			}
			echo $html;
		}
		?>
	</div>
</section>
<!-- close -->
<section class="formbg wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h1><?php echo $footer_section_heading; ?></h1>
			<p><?php echo $footer_section_content; ?></p>
			<img src="<?php echo $footer_section_image; ?>" class="fcontlogo">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contfr">
				<?php echo do_shortcode($footer_section_form); ?>
			</div>
		</div>
	</div>
</section>
<?php 
get_footer();
?>
<script>
$(document).ready(function () {
  $("#news-slider").owlCarousel({
    items: 4,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [980, 2],
    itemsMobile: [600, 1],
    navigation: true,
    navigationText: ["", ""],
    pagination: true,
    autoPlay: true
  });
});
</script>