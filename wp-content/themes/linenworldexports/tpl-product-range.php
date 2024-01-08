<?php 
/* Template Name: Product Range Template */ 
get_header();

$banner_image = CFS()->get( 'banner_image' );
$box_section = CFS()->get( 'box_section' );

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
				<li><?php echo get_the_title(); ?></li>
			</ul>
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img src="<?php echo $banner_image; ?>" class="whyusimg" />
		</div>
		<?php
		if($box_section) {
			foreach ($box_section as $k => $v) {
				$images = $v['images'];
				$heading = $v['heading'];
				$content = $v['content']; 
				if($k%2 == 0) { ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 indiv">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div id="carouselExampleAutoplaying<?php echo $k; ?>" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<?php 
									if($images) {
										foreach ($images as $k1 => $v1) { ?>
											<div class="carousel-item <?php if(!$k1) { echo 'active'; } ?>">
												<img src="<?php echo $v1['image']; ?>" />
											</div>
									<?php }	} ?>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying<?php echo $k; ?>" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying<?php echo $k; ?>" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 whysdl">
							<h1 class="whyslidh1"><?php echo $heading; ?></h1>
							<p><?php echo $content; ?></p>
						</div>
					</div>
				<?php }	else { ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 indiv">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 whysdl">
							<h1 class="whyslidh1"><?php echo $heading; ?></h1>
							<p><?php echo $content; ?></p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div id="carouselExampleAutoplaying<?php echo $k; ?>" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<?php 
									if($images) {
										foreach ($images as $k1 => $v1) { ?>
											<div class="carousel-item <?php if(!$k1) { echo 'active'; } ?>">
												<img src="<?php echo $v1['image']; ?>" />
											</div>
									<?php }	} ?>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying<?php echo $k; ?>" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying<?php echo $k; ?>" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
					</div>
		<?php } } } ?>
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