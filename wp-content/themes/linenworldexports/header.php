<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package linenworldexports
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="js no-touch cssanimations csstransitions">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
      <div class="topspace"></div>
      <header>
         <div class="container topar pleft pright">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
         </div>
         <section class="marblue" id="myHeader">
            <div class="container  pleft pright">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                  <?php
                  $header_logo = get_option("header_logo");
                  $phone_number = get_option("phone_number");
                  $contact_link = get_option("contact_link");
                  ?>
               	  <a href="<?php echo home_url(); ?>">
                  	<img src="<?php echo $header_logo; ?>" class="logo">
                  </a>

                  <div class="topfirst col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <a href="<?php echo $contact_link; ?>" class="cot-bt">Contact Us</a>
                     <div class="tcall-bt">CALL US : <a href="tel:<?php echo $phone_number; ?>" style="color:#fff;"><?php echo $phone_number; ?></a></div>
                  </div>
                  <div class="topsecond col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <nav class="nav_menutop">
                        <?php
                            wp_nav_menu( array(
                              'theme_location' => 'header_menu',
                              'menu_class' => '',
                              'container' => ''
                              )
                           ); 
                        ?>
                     </nav>
                     <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <?php
                            wp_nav_menu( array(
                              'theme_location' => 'header_mobile_menu',
                              'menu_class' => 'dl-menu',
                              'container' => ''
                              )
                           ); 
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </header>