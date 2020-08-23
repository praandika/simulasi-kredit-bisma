<?php
/**
 * Tema WP Showroom, tema CMS Wordpress untuk website Dealer
 * Author : Ciuss Creative
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0815-3274-4804
 */
    
	$cover = get_post_meta($post->ID, 'cov_gallery', true);
	$rep_fields = get_post_meta($post->ID, 'rep_fields', true);
	
?>
    
	<div id="cover">
	    <!-- COVER IMAGE -->
        <div class="coverin">
            <?php if ( is_array ($cover) ) { ?>
			    <div class="clear">
				    <div class="cover owl-carousel owl-theme">
			        	<?php foreach ($cover as $galcov) { ?>
				        	<div class="item">
					        	<?php echo wp_get_attachment_link( $galcov, 'full' ); ?>
				        	</div>
			        	<?php } ?>
		        	</div>
	        	</div>
			<?php } ?>
			
			<div class="cover-title">
	            <div class="container">
	                <h1 class="sr-motitle">
					    <?php the_title(); ?>
					</h1>
	                <?php dimox_breadcrumbs(); ?>
	            </div>
            </div>
			
			<?php 
			    if (is_array($rep_fields)) { 
				    $count = 0;
					foreach ( $rep_fields as $field ) {
					    $count++;	
						if ($count == 1) { 
						    $realprice = str_replace(array('.',' ','Rp'),'',esc_attr( $field['pricem'] ));
							$bill = 1000000000;
							$billprice = $realprice/$bill;
							$price = esc_attr( $field['pricem'] );
							$mill = 1000000;
							$millprice = $price/$mill;
							if ($realprice > 999999999) { 
						    	echo '<div class="car-pr"><span class="short-pr">'.$price.'</span></div>';
							} else {
								echo '<div class="car-pr"><span class="short-pr">'.$price.'</span></div>';
							}
						}
					}
				}
			?>
			
		</div><!-- END COVER IMAGE -->
	</div>