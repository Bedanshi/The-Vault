<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaultshop
 */

get_header();
?>

<main id="primary" class="site-main">
  <section class="container pb-5 pt-5" >
	<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded-3" data-bs-touch="true">
  <!-- <div class="carousel-indicators">
   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo get_template_directory_uri();?>/img/slider/slider-1.jpeg" class="carousel-image d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h1>Style Delivered to Your Doorstep </h1>
        <p>Discover the latest fashion trends with just a tap. Shop effortlessly from your phone and refresh your wardrobe today!</p>
		<a class="btn btn-primary pt-2 pb-2" href="http://localhost/bib/Vault/index.php/shop/" role="button">SHOP NOW</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo get_template_directory_uri();?>/img/slider/slider-2.jpg" class="carousel-image d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block pt-5 pb-5">
        <h1>Second slide label</h1>
        <p>Some representative placeholder content for the second slide.</p>
		<a class="btn btn-primary pt-2 pb-2" href="http://localhost/bib/Vault/index.php/shop/" role="button">SHOP NOW</a>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
 </section>


<section class="container">
	<div class="row d-flex justify-content-center">
	<h1 class="text-center pt-3 pb-3">Popular Products</h1>
		<p class="w-25"> We offer variety of products at affordable range and different varieties.</d>

	<div class="pt-5 pb-5">
		<?php echo do_shortcode( '[products popularity columns=4 limit=4]'  );?>
	</div>
</div>


</section>


<section class="categories pt-5 pb-5">
 <div class="container">
	<div class="row d-flex justify-content-center">
		<h1 class="text-center pt-3 pb-3">Categories</h1>
		<p class="text-center pt-3 pb-3"> We offer variety of products at affordable range and different varieties.</d>

	</div>

	<div class="row pt-5">
	
	
		<div class="col-lg-4 col-md-6 col-sm-12 pe-1 ps-1">
			<a href="#" class="categories_col d-inline-block  position-relative rounded overflow-hidden">
        

      <div class="image-categories">
             <img class="w-100 h-100"  src="<?php echo get_template_directory_uri();?>/img/categories/summer.jpg" alt=".." loading="lazy">
     
      
      <div class="image-categories-text"><h2 >Summer Clothes</h2></div>

      
      </div>
			</a>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 pe-1 ps-1">
			<a href="#" class="categories_col d-inline-block  position-relative rounded overflow-hidden">
        

      <div class="image-categories">
             <img class="w-100 h-100"  src="<?php echo get_template_directory_uri();?>/img/categories/winter.jpg" alt=".." loading="lazy">
     
      
      <div class="image-categories-text"><h2>Winter Clothes</h2></div>

      
      </div>
			</a>
		</div>
    <div class="col-lg-4 col-md-6 col-sm-12 pe-1 ps-1">
			<a href="#" class="categories_col d-inline-block  position-relative rounded overflow-hidden">
        

      <div class="image-categories">
             <img class="w-100 h-100"  src="<?php echo get_template_directory_uri();?>/img/categories/men.jpg" alt=".." loading="lazy">
     
      
      <div class="image-categories-text"><h2>Men Clothes</h2></div>

      
      </div>
			</a>
		</div>
		 
	
	
	
		<div class="col-lg-4 col-md-6 col-sm-12 pe-1 ps-1">
			<a href="#" class="categories_col d-inline-block position-relative rounded overflow-hidden">
        

      <div class="image-categories">
             <img class="w-100 h-100"  src="<?php echo get_template_directory_uri();?>/img/categories/watches.jpg" alt=".." loading="lazy">
     
      
      <div class="image-categories-text"><h2 >Watch</h2></div>

      
      </div>
			</a>
		</div>
		<div class="col-lg-8  col-sm-12 pe-1 ps-1">
			<a href="#" class="categories_col d-inline-block  position-relative rounded overflow-hidden">
        

      <div class="image-categories">
             <img class="w-100 h-100"  src="<?php echo get_template_directory_uri();?>/img/categories/jewellery.jpg" alt=".." loading="lazy">
     
      
      <div class="image-categories-text"><h2>Jewellery</h2></div>

      
      </div>
			</a>
		</div>
    	 
	</div>
 </div>
 
</section>



<section class="container pt-5">
	<div class="row d-flex justify-content-center">
	<h1 class="text-center pt-3 pb-3">Special offers</h1>
		<p class="w-25"> We offer variety of products at affordable range and different varieties.</d>

	<div class="pt-5 pb-5">
		<?php echo do_shortcode( '[sale_products columns=4 limit=4]'  );?>
	</div>
</div>










</main>

<?php

get_footer();
