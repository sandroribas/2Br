<?php
/*
Template Name: Single
*/
?>
<?php get_header(); //chama o topo do site ?>

 <div id="conteudo-principal">
 	<?php get_template_part('loop', 'single');?>
 </div>
 <?php get_sidebar() /*Também poderia usar: get_template_part('sidebar');*/ ?>


<?php get_footer(); //chama o rodape do site ?>