<?php
/**
*
* Template name: Pełna szerokość
*/
get_header(); ?>
 <!-- If we need navigation buttons -->
<article>
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<?php get_footer(); ?>
