<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>	
            <?php get_template_part( 'templates/content-post', get_post_format() ); ?>
    <?php endwhile; ?>
	<?php else : ?>
		<h1>Nic nie znaleziono</h1>
	<?php endif; ?>
<?php get_footer(); ?>
