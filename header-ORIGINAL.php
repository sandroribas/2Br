<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="<?php language_attributes() ?>" class="">
<!--<![endif]-->
<!--pelo Dreamweaver CS rola...-->
<!--glu, glu, yeah, yeah!!-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
<?php if (is_home () ) { bloginfo('name'); } elseif (is_category() || is_tag()) { single_cat_title(); echo ' &bull; ' ; bloginfo('name'); } elseif (is_single() || is_page()) { single_post_title(); } else { wp_title('',true); } ?>
</title>
<?php wp_enqueue_script("jquery"); ?>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
<link href="<?php bloginfo('template_url'); ?>/css/boilerplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
<!--<link rel="stylesheet" type="text/css" href="<?php //bloginfo('template_url'); ?>/css/login.css" /> para o login-->

<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/geral.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  
  	<div id="logo">
    	<a href="#" title="TWOBrasil"><img src="<?php header_image(); ?>" alt="" /></a>
    </div>
    <div id="nav-topo">
   	  <div id="vazio"></div>
       <div id="menu-topo">
			<?php     
                wp_nav_menu( array(
                    'container' =>false,
                    'theme_location' => 'menu-topo',
                    'menu' => 'menuPrincipal',
                    'menu_id' => 'navegacao-principal',
                    'menu_class' => 'menu',
                    'menu_class' => 'nav',
                    'echo' => true,
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'walker' => new description_walker())
                );
            ?>
		</div><!--menu-topo-->
    </div><!--Fim do NAV-topo-->
	<div id="slider">
   	  <div id="conteudo-slider">
      	<div id="legenda">
        	<div id="leg">
        		<h1>This is the content for Layout Div Tag "legenda".</h1>
            	<p>This is the content for Layout Div Tag "legenda". This is the content for Layout Div Tag "legenda".</p> 
            </div>       
        </div>
        <div id="imagem"><img class="imargem" src="<?php bloginfo('template_directory');?>/img/monitor.png" alt="monitor" /></div>
      </div>
      <div id="nav-slider">This is the content for Layout Div Tag "nav-slider"</div>
    </div><!--fim do SLIDER-->