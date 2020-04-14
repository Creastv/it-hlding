<div class="container">
			<div class="row">
				<?php if (get_field('tresc-banner-header')) : ?>
					<div id="top-banner" class="col-md-12">
					<div class="banner">
					<?php the_field('tresc-banner-header'); ?>
					</div>
					</div>
				<?php else: ?>
					<div id="top-banner" class=" col-md-12">
						<div class="top-space"></div>
					</div>
				<?php endif; ?>
			
				<div class="col-md-12">
					<nav id="navbar" class="navbar navbar-expand-lg"  itemscope itemtype="http://schema.org/SiteNavigationElement">
						<!-- Navbar brand -->
						<?php if(get_field('logo-header', 'option')):
								$logoHeader = get_field('logo-header', 'option');
						?>
							<a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
							<img src="<?php echo esc_url($logoHeader['url']); ?>" alt="<?php echo esc_attr($logoHeader['alt']); ?>" title="<?php echo esc_attr($logoHeader['title']); ?>" />
							</a>
						<?php endif; ?>
						<div class="hamburger hidden hamburger--spin js-hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<div class="hamburger-box">
							<div class="hamburger-inner"></div>
							</div>
						</div>
						<?php wp_nav_menu( array(
                            'walker' => new WP_Bootstrap_Navwalker(),
							'theme_location'	=> 'primary',
							'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
							'container'			=> 'div',
							'container_class'	=> 'collapse navbar-collapse',
							'container_id'		=> 'bs-example-navbar-collapse-1',
							'menu_class'		=> 'navbar-nav ml-auto',
						) ); ?>
						
					</nav>
                </div>
					<div class="col-md-12">
						<?php if (is_page_template('templates/home.php')) { ?>
						<?php } elseif (is_page_template('templates/inwestycja.php')) { ?>	
						<?php } elseif (is_page_template('templates/left-column-about.php')) { ?>
							
							<h2 class="page-title" title="<?php the_title(); ?>">
						<?php } elseif (is_single()) { ?>
							
							<h2 class="page-title" title="<?php the_title(); ?>">
						<?php } else {?>
							
							<h1 class="page-title" title="<?php the_title(); ?>">
						<?php } ?>
						<?php
							if ( is_category() ) :
								single_cat_title();
								
							elseif (is_page_template('templates/home.php')) :
							elseif ($post->post_type == 'slownik') :
									printf( 'Słownik', 'cr');
							elseif (is_single()) :
								printf( 'Blog', 'cr');

							elseif (is_page()) :
								the_title();

							elseif ( is_tag() ) :
								single_tag_title();

							


							elseif ( is_author() ) :
								the_post();
								printf( __( 'Author: %s', 'cr' ), '<span class="vcard">' . get_the_author() . '</span>' );
								rewind_posts();

							elseif ( is_day() ) :
								printf( __( 'Day: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
								printf( __( 'Month: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							elseif ( is_year() ) :
								printf( __( 'Year: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
								_e( 'Asides', 'cr' );

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
								_e( 'Images', 'cr');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
								_e( 'Videos', 'cr' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
								_e( 'Quotes', 'cr' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
								_e( 'Links', 'cr' );
							else :
								_e( 'Blog', 'cr' );

							endif;
                        ?>

                    <?php if (is_page_template('templates/home.php')) { ?>
					<?php } elseif (is_page_template('templates/inwestycja.php')) { ?>	
					<?php } elseif (is_page_template('templates/left-column-about.php')) { ?>
						</h2>
						<span class="sline"></span>
						<
					<?php } else {?>
						</h1>
						<span class="sline"></span>
						
					<?php } ?>
					
					</div>
					
            </div>
        </div>