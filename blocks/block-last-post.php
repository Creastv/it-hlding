<section class="post-rec <?php echo ($block['className']); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-title">
                <?php if(get_field('nad_tytulem')):?>
                <span><?php the_field('nad_tytulem'); ?></span>
                <?php endif; ?>
                <?php if(get_field('tytul')):?>
                <h2><?php the_field('tytul'); ?></h2>
                <span class="sline maincolor-sline margin-sline-20 center-sline"></span>
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