<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />	
	<meta name="author" content="Sean Brodbeck" />
	<meta name="copyright" content="Sean Brodbeck" />
	<meta name="description" content="Sean Brodbeck is a graphic & interactive designer in the Philadelphia area." />
	<meta name="keywords" content="design, graphic design, print design, web design, web development, development, animation, tyler school of art, char, serenitea, rashomon, sean brodbeck, philadelphia, pennsylvania, design scout, saxbys, "/>
	<link rel="shortcut icon" href="http://seanbrodbeck.com/favicon.ico" type="image/x-icon">
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:300italic,400italic,400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/wp-content/themes/sean/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wp-content/themes/sean/css/font-awesome.min.css">	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="/wp-content/themes/sean/sean.css" type="text/css" media="screen" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15530916-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
</head>

<body <?php body_class(); ?> >

<div id="container">	
<div id="header">
	<div class="inside clearfix">
							
		
		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><img src="/wp-content/themes/sean/images/seanbrodbeck-logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		</div>	<!--End Logo-->	
		
		
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>	
		<p class="slogan">Designer | Developer</p>	
		
		
		<div id="mainNav" class="clearfix">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>
		<div id="sidebar">
			<?php get_sidebar(); ?>	
		</div>
	</div>	
</div>


<div id="main" class="clearfix">