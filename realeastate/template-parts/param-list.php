<?php
 
// Set defaults.
$args = wp_parse_args(
    $args,
		array(
			'real_estate_id' => '',
	
		)
	);
?>


<ul class="list-group">
	<?php if(get_field('info_space', $args['real_estate_id'])):?>
		<li class="list-group-item">
			<span class="badge"> <?php the_field('info_space', $args['real_estate_id']); ?></span>
			<?php _e( 'Площадь: ' ); ?>
		</li>
	<?php endif;?> 
	<?php if(get_field('info_coast', $args['real_estate_id'])):?>
		<li class="list-group-item">
			<span class="badge"> <?php the_field('info_coast', $args['real_estate_id']); ?></span>
			<?php _e( 'Цена: ' ); ?>
		</li>
	<?php endif;?> 
	<?php if(get_field('info_address', $args['real_estate_id'] )):?>
		<li class="list-group-item">
			<span class="badge"> <?php the_field('info_address', $args['real_estate_id']); ?></span>
			<?php _e( 'Адрес: ' ); ?>
		</li>
	<?php endif;?>
	<?php if(get_field('info_livingspace', $args['real_estate_id'])):?>
		<li class="list-group-item">
			<span class="badge"> <?php the_field('info_livingspace', $args['real_estate_id']); ?></span>
			<?php _e( 'Жилая площадь: ' ); ?>
		</li>
	<?php endif;?>
	<?php if(get_field('info_storey', $args['real_estate_id'])):?>
		<li class="list-group-item">
			<span class="badge"> <?php the_field('info_storey', $args['real_estate_id']); ?></span>
			<?php _e( 'Этаж: ' ); ?>
		</li>
	<?php endif;?> 
</ul>