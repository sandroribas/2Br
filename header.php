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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/geral.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js" type="text/javascript"></script>
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
	
    <!-- SLIDER-->
    <div id="slides">
    	<div class="slides_container">
			<?php get_template_part('loop', 'slider');?> 
        </div>
        <a href="#" class="prev"><img src="<?php bloginfo('template_url'); ?>/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
		<a href="#" class="next"><img src="<?php bloginfo('template_url'); ?>/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
	</div>