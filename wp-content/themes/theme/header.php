<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>home</title>
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/js/lightbox-plus-jquery.min.js' ?>"></script>

	<script src="<?php echo get_template_directory_uri().'/js/main.js' ?>"></script>
</head>
<header id="header">
	<img id="banner" src="<?php echo ot_get_option('banner')?>" alt="">
	<div id="menu-top">
		<div class="container">
			<div id="logo">
				<a href="<?php esc_url(get_home_url()); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="">
				</a>
				<div id="icon-menu" class="hamburger hamburger--spin">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
			<div id="menu-top-right">
				<nav class="menu-header">


					<?php 

            $menuLocations = get_nav_menu_locations(); 
			$menuID = $menuLocations['primary']; 
			$primaryNav = wp_get_nav_menu_items($menuID); 
			?>
			<ul class="menu-header-top">
				<?php foreach ($primaryNav  as  $value) {
					?>
					<li><a href="<?php echo $value->url;  ?>" title=""><?php echo $value->title; ?></a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</div>

</div>
<div id="search">
	<form action="<?php echo esc_url(home_url('/')); ?>">
		<input type="text" name="s" id="s" value="<?php get_search_query( ); ?>" placeholder="Search">
		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</form>
</div>


</header>
<div class="fix-clean"></div>
<body>
	
