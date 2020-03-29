<!DOCTYPE html>
<html <?php language_attributes(); ?> >
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
	<?php if (is_page_template('templates/home.php')) : ?>
		<div id="preloader">
				<img class="img-fade" src="<?php echo get_template_directory_uri(); ?>/src/img/it-holding.png" alt="<?php wp_title( '|', true, 'right' ); ?>"></a>
		</div>
	<?php endif; ?>
	<header id="header" itemscope itemtype="http://schema.org/WPHeader" >
		<?php get_template_part( 'templates/header-nav', get_post_format() ); ?>
	</header>
	<?php if (is_page_template('templates/home.php')) : ?>
		<main id="main-home">
	<?php elseif (is_page_template('templates/inwestycja.php')) : ?>
		<main id="main-inwestycja">
	<?php else: ?>
		<main id="main-page">    
			<div id="top-img" style="background-image:url(<?php if(get_field('zdjecie_w_naglowku_strony_')): the_field('zdjecie_w_naglowku_strony_'); else: if(get_field('zdj-generick', 'option')):  the_field('zdj-generick', 'option'); endif;  endif; ?>);">
				<div id="bg-opacity"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg></div>
	        </div>
			<div class="container">
				<div class="row">
				<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="col-md-12"> <p id="breadcrumbs">','</p><hr></div>' );
						} ?>
					
	<?php endif; ?>	

	
	   
