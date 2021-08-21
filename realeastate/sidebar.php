<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'unite' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h2 class="widget-title"><?php _e( 'Meta', 'unite' ); ?></h2>
				<ul class="list-group">
					<?php wp_register(); ?>
					<li>
						<?php wp_loginout(); ?>
					</li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>

		<aside id="archives" class="widget">
				<h2 class="widget-title"><?php _e( 'Агенства', 'unite' ); ?></h2>
     			<?php
  				  $args = array(
   				 	'posts_per_page'   => -1, 
   					'post_type'        => 'agency',
				);
				$agency = get_posts( $args );
            ?>

        <ul class="list-group">

		<?php
			foreach ($agency as $agen) :

				$realestate_count = get_field('agensy_real_estate', $agen->ID);	
			
                if (is_countable($realestate_count)):
                  $m_count = count($realestate_count);
				else:
  				  $m_count = 0;
				endif;

			?>

				<li class="list-group-item">
					<span class="badge"> <?php echo $m_count; ?></span>
					<a href="<?php echo get_permalink($agen->ID); ?>">
						<?php echo $agen->post_title; ?>
					</a>
				</li>

             <?php  


     		endforeach;
			wp_reset_postdata(); 
			?>
	</aside>

	</div><!-- #secondary -->