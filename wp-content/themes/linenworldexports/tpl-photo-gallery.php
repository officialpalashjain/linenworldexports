<?php 
/* Template Name: Photo Gallery Template */ 
get_header();

$images = CFS()->get( 'images' );
?>
<section class="inner-white wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility:visible;animation-duration:1500ms;animation-delay:400ms;animation-name:fadeIn">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="backlinks">
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li>Photo Gallery</li>
        </ul>
        <h1>Photo Gallery</h1>
      </div>
      <?php 
      if($images) {
      	foreach ($images as $k => $v) { ?>
      		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        	<div class="gallbox">
	          		<img src="<?php echo $v['image']; ?>" />
	        	</div>
	        </div>
      <?php } } ?>
      
      <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagn">
        <a href="#" class="prevnext">Prev</a>
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
        <a href="#" class="prevnext">Next</a>
      </div> -->
    </div>
  </section>
<?php 
get_footer();
?>