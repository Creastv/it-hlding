<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" class="col-md-12 col-lg-8 hentry">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <header class="header-single">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php if ($post->post_type == 'slownik') : ?>
            <?php else: ?>
                <div class="pub-tim">
                    <p><i class="fas fa-user-edit"></i> <span class="vcard author"> <span class="fn"><?php the_author(); ?></span></span></p>	
                    <p><i class="fas fa-calendar-alt"></i> <span class="date published"> <?php the_time('Y/m/d'); ?></span></p>
                    <p><i class="fas fa-edit"></i> <span class="date updated"> <?php echo get_the_modified_time('Y/m/d'); ?></span></p><br>
                    <i class="fas fa-tags"></i> <?php the_category(', '); ?>
                </div>
            <?php endif; ?>
        </header>
        <?php if ($post->post_type == 'slownik') : ?>
            <div class="slownik-content entry-content">
               <?php the_content(); ?>
            </div>
        <?php else: ?>
            <div class="entry-content">
            <?php the_content(); ?>
            </div>
        <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
    <?php if ($post->post_type == 'slownik') : ?>
        <section class="all-sl">
        <hr>
        <h4>Pozoztałe wyrażenia które mogą cię zainteresować:</h4>
        <span class="sline maincolor-sline margin-sline-20"></span>
            <ul class="tagcloud">
            <?php $args = array('post_type' => 'slownik', 'posts_per_page' => 20, 'orderby' => 'rand', 'post__not_in' => array( get_the_ID() ));
                $post_query = new WP_Query($args);
                if($post_query->have_posts() ) : while($post_query->have_posts() ) :  $post_query->the_post(); ?>
                    <li > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
            </ul>
        </section>
    <?php endif; ?> 
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
<div class="col-md-12">
  
</div>
<?php if ($post->post_type !== 'slownik') : ?>
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
                        <?php $args = array('post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'rand', 'post__not_in' => array( get_the_ID() ));
                            $post_query = new WP_Query($args);
                            if($post_query->have_posts() ) : while($post_query->have_posts() ) :  $post_query->the_post(); ?>
                                <?php get_template_part( 'templates/content-post', get_post_format() ); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?> 
<?php endif; ?>   
<?php get_footer(); ?>