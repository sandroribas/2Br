<?php
/**
 * O template do formulário de busca do thema 2BR
 *
 * @package WordPress
 * @subpackage 2Br
 * @since 2Br 1.0
 */
?>
<div id="busca">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Busca', '2br' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', '2br' ); ?>" />
	</form>
</div>