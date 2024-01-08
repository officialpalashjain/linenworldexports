<?php 
/* Template Name: Company Profile Template */ 
get_header();

$banner_image = CFS()->get( 'banner_image' );
$content_1 = CFS()->get( 'content_1' );
$heading_1 = CFS()->get( 'heading_1' );
$content_2 = CFS()->get( 'content_2' );
$second_section_image = CFS()->get( 'second_section_image' );

$footer_section_heading = CFS()->get( 'footer_section_heading', 9 );
$footer_section_content = CFS()->get( 'footer_section_content', 9 );
$footer_section_image = CFS()->get( 'footer_section_image', 9 );
$footer_section_form = CFS()->get( 'footer_section_form', 9 );
?>

<section class="inner-white wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility:visible;animation-duration:1500ms;animation-delay:400ms;animation-name:fadeIn">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="backlinks">
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li>Company Profile</li>
			</ul>
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img src="<?php echo $banner_image; ?>" class="whyusimg" />
			<p><?php echo $content_1; ?></p>
			<br />
			<h3 class="cp-h3"><?php echo $heading_1; ?></h3>
			<p><?php echo $content_2; ?></p>
		</div>
	</div>
</section>
<!-- close -->

<section class="fourroundbox cplogos wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility:visible;animation-duration:1500ms;animation-delay:400ms;animation-name:fadeIn">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blueline-left.png" class="blueline-left" />
			<img src="<?php echo $second_section_image; ?>" class="adp" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blueline-right.png" class="blueline-right" />
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