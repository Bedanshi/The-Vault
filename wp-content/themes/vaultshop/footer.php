<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaultshop
 */

?>

	<footer id="colophon" class="site-footer">
		
	<div class="bg-primary text-white pt-5 pb-5" >

	<div class="container">
		<div class="row">

		<div class=" col-sm-6 col-md-2">
			<?php dynamic_sidebar('footer_widget-col-one'); ?>
		</div>
		<div class=" col-sm-6 col-md-2">
		<?php dynamic_sidebar('footer_widget-col-two'); ?>
		</div>
		<div class=" col-sm-12 col-md-4 ms-auto">
		<?php dynamic_sidebar('footer_widget-col-three'); ?>
		</div>
		</div>
	</div>
	</div>


<div class="container pt-3">
	<div class="row d-flex align-items-center">
		<div class="col">
			<p>&copy; <?php bloginfo('name');?> <?php echo date ('Y'); ?> / Created by <a href="www.bedanshi.com" target="_blank">Bedanshi</a></p>
		</div>
		<div class="col h-25 d-inline-block text-end">
			<img src="<?php echo get_template_directory_uri();?>/img/payment.png" class="img-fluid" loading="lazy" alt="..">
		</div>
	</div>
</div>




	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
