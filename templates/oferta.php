<?php
/**
*
* Template name: Oferta formularz
*/
get_header(); ?>
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           dfghdfsgh
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<aside class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
   <?php echo do_shortcode('[contact-form-7 id="295" title="Formularz-oferta"]'); ?>
</aside>

<?php get_footer(); ?>
