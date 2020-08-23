<?php
/**
 * Tema WP Showroom, tema CMS Wordpress untuk website Dealer
 * Author : Ciuss Creative
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0815-3274-4804
 */
    
	get_header(); ?>

    <?php if (have_posts()): ?>
	    <?php while (have_posts()): the_post(); ?>
		
            <?php get_template_part('show/model/script'); ?>
			<?php get_template_part('show/model/cover'); ?>
            
			<?php get_template_part('show/model/specs'); ?>
					
		<?php endwhile; ?>
    <?php endif; ?>
		
    <?php get_template_part('show/after-slider'); ?>
	
<?php get_footer(); ?>