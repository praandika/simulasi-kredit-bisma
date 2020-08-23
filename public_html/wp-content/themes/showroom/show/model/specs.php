<?php
/**
 * Tema WP Showroom, tema CMS Wordpress untuk website Dealer
 * Author : Ciuss Creative
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0815-3274-4804
 */

    $rep_fields = get_post_meta($post->ID, 'rep_fields', true);
	$images = get_post_meta($post->ID, 'vdw_gallery_id', true);
	$specs_model = get_post_meta($post->ID, 'specs_model', true);
	$feat_model = get_post_meta($post->ID, 'feat_model', true);
	$embed = get_post_meta($post->ID, '_embed', true);
	$status = get_post_meta($post->ID, '_status', true);
	$onpart = get_option('onpart');

?>

	<section id="specs">
	    <div class="container clear">
			
			<!-- RIGHT -->
			<div class="speright">
				<div class="inright">
				    <!-- Pricing Table -->
				    <h3 class="hespec">Daftar Harga <i class="fa fa-motorcycle"></i></h3>	

                    <div class="ava">
					    <?php 
						    if (is_array($rep_fields)) { 
								$total_rep = count($rep_fields);
							    echo '<span><i class="fa fa-check-circle-o"></i> Tersedia '.$total_rep.' Type</span>';
							} 
							if ( $status != null ) {
								if ( $status != 'None' ) {
									echo '<span class="ava-'. $status .'"><i class="fa fa-check-circle-o"></i> '. $status .'</span>';
								}
						    }
						?>
					</div>
					
				    <table class="sr-table">
				    	<tr>
				    		<td>Type</td>
				    		<td class="pr hr">Harga</td>
					    	<td class="pr rg">Chat</td>
		    			</tr>
			     		<?php 
				    	    if (is_array($rep_fields)) {
					    		$count = 0;
						    	foreach ( $rep_fields as $field ) {
							    	$count++; 
			    					?>
				    			    <tr>
					    			    <td><?php echo esc_attr( $field['typem'] ); ?></td>
						    		    <td class="hr"><?php echo esc_attr( $field['pricem'] ); ?></td>
							    		<td class="rg">
								    		<?php 
									    	    $was = get_option('whatsapp'); 
										        $new_was = preg_replace("/[^A-Za-z0-9?!]/",'',$was);
			    							?>
				    						<a class="sr-wamob" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $new_was; ?>&text=Saya ingin info terbaru tentang%0a<?php echo $onpart; ?> *<?php the_title(); ?>*, <?php echo esc_attr( $field['typem'] ); ?> %0aHarga *<?php echo esc_attr( $field['pricem'] ); ?>* %0a<?php the_permalink(); ?>">
						    					<i class="fa fa-whatsapp"></i>
							    			</a>
								    		<a class="sr-wades"target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $new_was; ?>&text=Saya ingin info terbaru tentang%0a<?php echo $onpart; ?> *<?php the_title(); ?>*, <?php echo esc_attr( $field['typem'] ); ?> %0aHarga *<?php echo esc_attr( $field['pricem'] ); ?>* %0a<?php the_permalink(); ?>">
									    		<i class="fa fa-whatsapp"></i>
								    		</a>
									    </td>
				    			    </tr>
					    	        <?php 
						    	}
				    		} 
				    	?>
			    	</table><!-- Pricing Table -->
					
				</div>

				<div class="inright">
				    <!-- Spesifikasi Table -->
				    <h3 class="hespec">Spesifikasi <i class="fa fa-motorcycle"></i></h3>				
				    <table class="sr-table">
				    	<tr>
				    		<td>Spec</td>
				    		<td class="pr hr">Keterangan</td>
		    			</tr>
			     		<?php 
				    	    if (is_array($specs_model)) {
					    		$count = 0;
						    	foreach ( $specs_model as $spc ) {
							    	$count++; 
			    					?>
				    			    <tr>
					    			    <td><?php echo esc_attr( $spc['specm'] ); ?></td>
						    		    <td class="hr"><?php echo esc_attr( $spc['detail'] ); ?></td>
				    			    </tr>
					    	        <?php 
						    	}
				    		} 
				    	?>
			    	</table><!-- Spesifikasi Table -->
				</div>
			
			</div>
			
			<div class="speleft">
				<div class="leftin">
				    
				    <!-- Special Featured -->
				    <div class="detbox">
					    <h3 class="hebox"><?php echo (get_option('respeci')) ? get_option('respeci') : 'Special Features' ?></h3>
							
				        <?php 
							if (is_array($feat_model)) {
								$count = 0; 
								echo '<ul class="sr-feat">';
							    foreach ( $feat_model as $ffield ) {
								    $count++; 
									echo '<li><i class="fa fa-check-circle-o"></i> '. esc_attr( $ffield['feats'] ).'</li>';
						        } 
								echo '</ul>';
						    } 
						?>
					</div><!-- Special Featured -->
					
									
				<div class="inright">
				    
					<h3 class="hespec">Galeri Gambar <i class="fa fa-camera"></i></h3>	
					<!-- Show Gallery -->
       	            <div class="row sr-gall">
    	                <div class="large-12 columns clear">
	     	                <div class="smtop owl-carousel owl-theme">
									
								<?php 
								    if ( is_array ($images) ) {
										foreach ($images as $fimage) {
										?>
							    			<div class="item">
							        			<?php echo wp_get_attachment_link( $fimage, 'landscape' ); ?>
							      			</div>
							        	<?php 
										}
									} else {
										if (has_post_thumbnail()) {
											the_post_thumbnail('landscape', array(
							        	        'alt' => trim(strip_tags($post->post_title)),
									            'title' => trim(strip_tags($post->post_title)),
									        ));
										} else {
								        	echo '<img src="'. get_template_directory_uri().'/images/default.jpg"/>';
						     	    	}
									} 
								?>
									
							</div>
						</div>
					</div><!-- End Show Gallery -->
							
				</div>
				

				
				    <?php 
				        if (get_post_meta($post->ID, '_embed')) { 
				    	?>
				            <iframe class="sr-you" src="https://www.youtube.com/embed/<?php echo $embed; ?>" frameborder="0" allowfullscreen></iframe>
				        <?php 
					    } 
					?>
				    
					<!-- Descriptions -->
					<div class="detbox">
					    <h3 class="hebox"><?php the_title(); ?></h3>
		                <?php the_content(); ?>
					</div>
					
				</div>
			</div>
        </div>			
	</section>
