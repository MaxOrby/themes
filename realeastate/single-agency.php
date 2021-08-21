<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite 
 */

get_header(); 

?> 

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo esc_attr(unite_get_option( 'site_layout' )); ?>">
		<main id="main" class="site-main" role="main">
            <h1 class="entry-title "><?php the_title();?></h1>

			<?php if ($agensy_real_estate = get_field('agensy_real_estate')):

              	foreach($agensy_real_estate as $agensy_real_estat):
					$var_real_estate = $agensy_real_estat->ID;
        		 ?>
                  
				<article class="realestate_item">
					  <h2><a href="<?php echo get_permalink($var_real_estate); ?>" rel="bookmark"><?php echo $agensy_real_estat->post_title; ?></a></h2>
						<?php echo get_the_post_thumbnail( $var_real_estate, 'unite-featured', array( 'class' => 'thumbnail') ); ?>
                        <?php get_template_part( './template-parts/param-list', '', ['real_estate_id' => $var_real_estate]);  ?>
				</article>

				<?php endforeach; wp_reset_postdata(); ?>

				<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>