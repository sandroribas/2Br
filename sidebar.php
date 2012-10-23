<div id="barra-lateral">
    <?php get_search_form('minha_busca'); ?>
    <div id="widgets-side">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home A') ) : ?>
        			<p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets no '); ?><strong><?php _e('Home A'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
	</div>
	<?php endif; ?>
</div>