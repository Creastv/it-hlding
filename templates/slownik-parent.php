<?php
/*
 * Template Name: Słownik Parent
 * Template Post Type: slownik
 */
  
 get_header();  ?>
<article class="col-md-12 col-lg-8">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <header class="header-single">
            <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
            <?php if ($post->post_type == 'slownik') : ?>
            <?php else: ?>    
            <div class="pub-tim">
                <?php the_author_posts_link(); ?> <?php the_time('F jS, Y'); ?>   <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?>
            </div>
            <?php endif; ?>
        </header>
        <div class="slownik-content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
        <section class="all-sl">
            <ul class="tagcloud">
            <?php $args = array(
                'post_type' => 'slownik',
                'post_parent'    => $post->ID,
                'posts_per_page' => -1,
                'post__not_in' => array( get_the_ID() ),
            );
                $post_query = new WP_Query($args);
                if($post_query->have_posts() ) : while($post_query->have_posts() ) :  $post_query->the_post(); ?>
                    <li > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
            </ul>
        </section>
</article>
<aside class="sidebar col-md-12 col-lg-4">
    <div class="stick-to-top">
    <?php if ($post->post_type == 'slownik') : ?>
        <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-6' ) ) : ?>
        <?php endif; ?>
    <?php else: ?>
        <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <?php endif; ?>
    <?php endif; ?>
    </div>
</aside>


<?php get_footer(); ?>