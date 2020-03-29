<?php get_header(); ?>
<article class="col-md-8">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <header class="header-single">
            <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
            <p class="date-author"><?php the_date(); ?></p>
        </header>
        <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<aside class="col-md-4">
    <div class="stick-to-top">
        <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <?php endif; ?>
    </div>
</aside>
<?php if(get_field('podobne_wpisy', 'option')): ?>
    <section class="post-rec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <?php if(get_field('naglowek_rekomendacje', 'option')):?>
                    <h4><?php the_field('naglowek_rekomendacje', 'option'); ?></h4>
                    <span class="sline maincolor-sline margin-sline-20"></span>
                    <?php endif; ?>
                </div>
                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() ));
                        $post_query = new WP_Query($args);
                        if($post_query->have_posts() ) : while($post_query->have_posts() ) :  $post_query->the_post(); ?>
                            <?php get_template_part( 'templates/content-post', get_post_format() ); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>    
<?php get_footer(); ?>