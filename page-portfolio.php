<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); //chama o topo do site ?>
<div id="corpo">
<?php get_template_part('loop', 'portfolio'); ?>      
</div><!--fim do CORPO-->
<?php get_footer(); //chama o rodape do site ?>