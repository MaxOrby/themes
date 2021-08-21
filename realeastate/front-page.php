<?php get_header();?>

<main id="main" class="content-area col-sm-12 col-md-8 site-main <?php echo esc_attr(unite_get_option( 'site_layout' )); ?>" role="main">
	<?php 
			$realestate_c = get_transient( 'realestate_cached' );
			   
				if ( false === $realestate_c ):		
			 	   $realestate_c = query_posts( array(
					'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'realestate-categories',
								'terms'    => 'realestate',
							)
						)
					) );
					
					set_transient( 'realestate_cached',  $realestate_c, 30);	
	    		endif;

			foreach( $realestate_c as $realestate_ct ):
				setup_postdata($realestate_ct);
				$var_real_estate = $realestate_ct->ID;
		?>  
 
		<article class="realestate_item">
			<h2><a href="<?php echo get_permalink($var_real_estate); ?>" rel="bookmark"><?php echo $realestate_ct->post_title; ?></a></h2>
				<?php echo get_the_post_thumbnail( $var_real_estate, 'unite-featured', array( 'class' => 'thumbnail') ); ?>
   		    	<?php get_template_part( './template-parts/param-list', '', ['real_estate_id' => $var_real_estate]); ?>
		</article>

		<?php	
		endforeach;
    	wp_reset_postdata(); 
    	?>     
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
