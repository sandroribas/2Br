<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os ?>

    <div class="conteudo-busca">
        <h2 class="titulo-busca"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2><!--TITULO DO POST--> 
        
        <div class="resultado-busca">
			<a href="<?php the_permalink() ?>"><?php search_excerpt_highlight();//aqui mostramos o resultado do excerto de texto destacado com search_excerpt_highlight(); ao invés de usar the_excerpt();  ?></a>
			<hr />
        </div><!--resultado da busca-->
              
    </div><!--fim POSTS-ROMA-->

	<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>

	<h2><?php _e('Ops...', '2br'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', '2br'); ?></p>

<?php endif; wp_reset_query();?>

	<p align="center"><?php posts_nav_link(); ?></p>  
