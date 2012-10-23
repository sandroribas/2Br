<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os 

	//$personalUrl = get_post_meta($post->ID, 'url', true);//pegando campo personalizado com a URL ?>
<div id="single">
    <h1><?php the_title(); ?></h1><!--titulo-->
    
    <div class="blog-post-date"><p><?php echo get_the_time('d'); ?> <span><?php echo get_the_time('M'); ?></span></p></div><!--data-->
    
    <?php the_post_thumbnail('post-thumbnails'); ?><!--CHAMA AS "IMAGENS DESTACADAS"-->
    <!--<img class="blog-post-thumb" src="<?php //bloginfo('template_directory'); ?>/images/530x210-1.png" width="530" height="210" alt="" />-->
    
    <?php the_content(); ?> 
</div><!--fom do SINGLE-->

<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', '2br'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', '2br'); ?></p>

<?php endif; wp_reset_query();?>