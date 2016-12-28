
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div class="header-login">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<nav id="menu-login">
							<ul>
								<li><a href="" title="">Login</a></li>
								<li><a href="" title="">Regester</a></li>
								<li><a href="" title=""> <span class="glyphicon glyphicon-shopping-cart"></span> Shopping cart</a></li>
								<li><a href="" title="" class="active_phone">886 off-the-grid</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="header-logo-email">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt=""></a>
					</div>
					<div class="col-md-3 col-md-offset-3">
						<div id="content-send-mail">
							<p>Sign up for News & Special Offers</p>
							<div id="send-box">
								<form>
							  <div class="input-group">
							    <input type="text" id="input-send" class="form-control" placeholder="send address">
							    <div class="input-group-btn">
							      <button class="btn btn-default"  id="btn-send" type="submit">
							        ok
							      </button>
							    </div>
							  </div>
							</form>
							</div>

							
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<section id="menu-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
							<?php
									wp_nav_menu( array(
										'menu_class'     => 'nav navbar-nav',
										'theme_location' => 'primary',
									) );
								?>
								<div id="seach-box">
									<form  method="get"class="navbar-form navbar-left" id="form-search" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Site search" name="s" value="<?php echo get_search_query(); ?>" >
										</div>
										<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
									</form>
								</div>
							</div>
						</div>
				</nav>
			</div>
		</div>
	</div>
			
	
	</section>
	<section id="content-home">
		<div class="container">
			<div class="row row-home">

				<div class="col-xs-12 col-sm-6 col-md-2">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-md-10">
				   <div id="home-content">
