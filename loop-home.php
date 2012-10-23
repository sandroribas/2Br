<?php 
//query_posts('category_name=noticias&showposts=3');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os 
	//$personalUrl = get_post_meta($post->ID, 'url', true);//pegando campo personalizado com a URL ?>
	
        			<!--<h1>--><!--<a href="<?php //the_permalink() ?>">--><?php //the_title(); ?><!--</a>--><!--</h1>-->

						<div class="img-quem"><?php the_post_thumbnail('post-thumbnails'); ?><!--CHAMA AS "IMAGENS DESTACADAS"--></div>                  
					<?php __(the_content()); ?>
                   <!-- <img class="blog-post-thumb" src="<?php //bloginfo('template_directory'); ?>/img/monitor.png" alt="" />-->
            
        			

<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', '2br'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', '2br'); ?></p>

<?php endif; wp_reset_query();?>