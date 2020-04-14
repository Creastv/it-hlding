<?php get_header(); ?>
   <?php if ($post->post_type == 'slownik') : ?>
    <section class="all-sl">
        <ul class="tagcloud">
            <?php $args = array('post_type' => 'slownik', 'posts_per_page' => 20, 'orderby' => 'rand', 'post__not_in' => array( get_the_ID() ));
                $post_query = new WP_Query($args);
                if($post_query->have_posts() ) : while($post_query->have_posts() ) :  $post_query->the_post(); ?>
                    <li > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
        </ul>
   </section>
    <?php else: ?>	
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'templates/content-post', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>Nic nie znaleziono</h1>
        <?php endif; ?>
    <?php endif; ?>	
<?php get_footer(); ?>
