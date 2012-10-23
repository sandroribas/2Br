<?php
/*
Template Name: Home
*/
?>
<?php get_header(); //chama o topo do site ?>
 <div id="corpo">
 	<?php get_template_part('loop', 'home');?>
      
    </div><!--fim do CORPO-->
<?php get_footer(); //chama o rodape do site ?>