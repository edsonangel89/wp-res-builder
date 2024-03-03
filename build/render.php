<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<form <?php echo get_block_wrapper_attributes();?>>
	<label><?php esc_html_e( 'User', 'wp-res-builder' ); ?></label>
	<input type='text' />
	<label><?php esc_html_e( 'Password', 'wp-res-builder' ); ?></label>
	<input type='text' />
	<input type='submit' />
</form>

<?php
/* 
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Wp Res Builder – hello from a dynamic block!', 'wp-res-builder' ); ?>
</p>
 */
?>