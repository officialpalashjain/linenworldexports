<?php 
/* Template Name: Thank You Template */ 
get_header();


?>
<section class="inner-white wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility:visible;animation-duration:1500ms;animation-delay:400ms;animation-name:fadeIn">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<h1><?php echo get_the_title(); ?></h1>
      	<p><?php echo get_the_content(); ?></p>
      </div>
  </div>
</section>
<?php 
get_footer();
?>