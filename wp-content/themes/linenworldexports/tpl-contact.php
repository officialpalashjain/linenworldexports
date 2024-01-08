<?php 
/* Template Name: Contact US Template */ 
get_header();

$footer_section_heading = CFS()->get( 'footer_section_heading', 9 );
$footer_section_content = CFS()->get( 'footer_section_content', 9 );
$footer_section_image = CFS()->get( 'footer_section_image', 9 );
$footer_section_form = CFS()->get( 'footer_section_form', 9 );
?>
<section class="formbg contactpagebg wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility:visible;animation-duration:1500ms;animation-delay:400ms;animation-name:fadeIn">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<ul class="backlinks contback">
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li>Contact Us</li>
			</ul>
			<h1>Contact Us</h1>
			<?php the_content(); ?>
			<table width="100%" border="0" align="left" class="tab1 tab2">
				<tr>
					<td>
						<?php dynamic_sidebar( 'footer-info-widget' ); ?>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contfr">
				<h2 class="cth2">request a quote</h2>
				<?php echo do_shortcode($footer_section_form); ?>
			</div>
		</div>
	</div>
</section>
<?php 
get_footer();
?>