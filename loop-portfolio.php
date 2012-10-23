<?php 
//query_posts('category_name=noticias&showposts=3');
query_posts('category_name=trabalhos&showposts=0');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os 

	//$personalUrl = get_post_meta($post->ID, 'url', true);//pegando campo personalizado com a URL ?>
        			
  <div class="portfolio">
    <h1 class="portifolio-titulo"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <div class="post-data"><p><?php echo get_the_time('d'); ?> <span><?php echo get_the_time('M'); ?></span></p></div>
        
    <a class="portifolio-img" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('post-thumbnails'); ?><!--"IMGS DESTACADAS"-->
    </a>
        
    <?php the_excerpt(); ?> 
    <a class="portifolio-leiamais" href="<?php the_permalink(); ?>"><?php _e('Leia Mais...','aristatico'); ?></a><!--leia mais-->
  
  </div><!--fim do post--> 			

<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', '2br'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', '2br'); ?></p>

<?php endif; wp_reset_query();?>