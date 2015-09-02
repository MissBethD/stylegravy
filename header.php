<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
        <?php if(is_front_page()) {?>
            <?php bloginfo('name'); ?>
        <?php } else { ?>
            <?php echo wp_title( ' | ', false, right ); 
            bloginfo('name'); ?>
        <?php } ?>
	</title>
	<!-- While these meta keywords are not ideal and the meta description could be better, they are better than nothing -->
	<meta name="keywords" content="<?php bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta media="(max-width: 480px)" content="mobile" name="breakpoint" >
	<meta media="(min-width: 481px)" content="mobilelarge" name="breakpoint" >
	<meta media="(max-width: 1024px)" content="mobile-tablet" name="breakpoint" >
	<meta media="(min-width: 768px)" content="tablet" name="breakpoint" >
	<meta media="(min-width: 1016px)" content="desktop" name="breakpoint" >
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="//use.typekit.net/ptf1ong.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="section header">
		<div class="section-inner clearfix">
		   	<div class="stylegravy-logo-wrapper">
				<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/groovygravy_bw.png" alt="logo" width="296" height="149"/></a> <!-- .logo -->
			</div> <!-- .eap-logo-wrapper -->
			
		   	<a href="#" id="menu-trigger" class="mobile-menu"><span class="fa fa-bars"></span></a>
		   	<div id="header-menu"><?php include('mainnav.php'); ?></div> <!-- #header-menu -->	
			
<!--
			<ul class="social-icons header">
				<li>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
				</li>
			</ul>
-->

			
		</div> <!-- .section-inner -->
	</div> <!-- .section .header -->