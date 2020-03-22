<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="theme-color" content="#22abeb">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
     <header id="header">
	    <div class="grad-bar"></div>
		<nav class="navbar" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
			<img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
			<div class="menu-toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
				<?php wp_nav_menu( array(
					'walker' => new crea_Walker_Nav_Menu(),
					'container'=> false,
					'menu_class'=> 'nav no-search',
				    'menu_id'=> 'header-nav',
					'theme_location' => 'primary'
				) ); ?>
				<!-- <i class="fas fa-search" id="search-icon"></i>
				<input class="search-input" type="text" placeholder="Search..">  -->
		</nav>
	</header> 

	<main id="main" class="row">

	
		

