<?php get_header(); ?>
    <article class="col-md-12">
        <?php if (have_posts()) :
            while ( have_posts() ) : the_post(); ?>
            <div class="content-page">
               <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
<?php get_footer(); ?>