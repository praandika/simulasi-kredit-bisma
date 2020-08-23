<?php
/**
 * Tema WP Showroom, tema CMS Wordpress untuk website Dealer
 * Author : Ciuss Creative
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0815-3274-4804
 */

    get_header();
    dimox_breadcrumbs(); 
?>
<section class="sr-listing">
    <div class="container clear">
		
		<h1 class="sr-listle"><span>Berita Terbaru</span></h1>
    	<div class="sr-lloop">
		    <div class="in-ll">
            	<div class="sr-lisbox">
		        	<div class="sr-beforelist clear">
		            	<?php get_template_part('show/loop/post'); ?>
		        	</div>
	        	</div>
	        	<div class="clear">
	        	    <?php get_template_part('pagination'); ?>
				</div>
	    	</div>
		<!-- left content -->
		</div>
		<div class="sr-rloop">
		    <?php get_sidebar(); ?>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
