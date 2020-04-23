<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta name="theme-color" content="#8cc02a">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="preloader">
		<img class="img-fade" src="<?php echo get_template_directory_uri(); ?>/src/img/it-holding.png" alt="<?php wp_title( '|', true, 'right' ); ?>"></a>
	</div>
	<?php if (is_page_template('templates/home.php')) : ?>
		
		<header id="header" class="header-home" itemscope itemtype="http://schema.org/WPHeader" >
			<?php get_template_part( 'templates/header-nav', get_post_format() ); ?>
		</header>
		<main id="main-home">
		<?php if( have_rows('slider_home') ): ?>
			<div class="swiper-container swiper-header swiper-home">
				<div class="swiper-wrapper">
						<?php while( have_rows('slider_home') ): the_row(); 
							$image = get_sub_field('zdjecie');  ?>
							<div class="swiper-slide" style="background:url(<?php echo $image['url']; ?>);" >
								<div class="wraper">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<div class="wraper-content">
													<div class="content">
													<?php if(get_sub_field('naglowek')):?>
															<div class="naglowek ">
															<?php the_sub_field('naglowek') ?>
															<span class="sline center-sline"></span>
															</div>
														<?php endif;?>
														<?php if(get_sub_field('opis')):?>
															<div class="opis">
															<?php the_sub_field('opis') ?>
															</div>
														<?php endif;?>

														<?php if( have_rows('button') ): ?>
															<div class="buttons">
															<?php  while( have_rows('button') ): the_row(); ?>
																<a href="<?php the_sub_field('link_buttona'); ?>" class="btn btn-main btn-big <?php the_sub_field('przezroczysty'); ?>"><?php the_sub_field('tresc_buttona'); ?></a>
															<?php endwhile; ?>
															</div>
														<?php endif;?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
				</div>
				<?php if( have_rows('logotypy') ): ?>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12">
								<div class="logos">
								<?php while( have_rows('logotypy') ): the_row(); 
									$image = get_sub_field('logo'); ?>
									<div class="img">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
									</div>
								<?php endwhile; ?>
								</div>
								</div>
							</div>
						</div>

				<?php endif; ?>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination-home"></div>
		<?php else: ?>
			<div class="cover">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<header id="header" itemscope itemtype="http://schema.org/WPHeader" >
			<div id="top-img" style="background-image:url(<?php if(get_field('zdjecie_w_naglowku_strony_')): the_field('zdjecie_w_naglowku_strony_'); else: if(get_field('zdj-generick', 'option')):  the_field('zdj-generick', 'option'); endif;  endif; ?>);">	
				<div id="bg-opacity"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg>
					<?php get_template_part( 'templates/header-nav', get_post_format() ); ?>
				</div>
			</div>
		</header>
	<?php endif; ?>
    	
	<?php if (is_page_template('templates/home.php')) : ?>
		
	<?php elseif (is_page_template('templates/fullwidth.php')) : ?>	
	
		<main id="main-page">  
		<div class="container">
			<div class="row">  
			<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="col-md-12"> <p id="breadcrumbs">','</p><hr></div>' );
						} ?>
			</div>
		</div>
	<?php else :?>
		<main id="main-page">    
			<div class="container">
			<div class="row">
			<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="col-md-12"> <p id="breadcrumbs">','</p><hr></div>' );
						} ?>
	<?php endif; ?>
			
					


	
	   
