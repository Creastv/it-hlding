<article id="post-<?php the_ID(); ?>" class="content-post col-md-4" >
    <a href="<?php the_permalink(); ?>">
        <div class="box-post " style="background-image:url(<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url($post_id, 'post-thumb'); } else { echo get_template_directory_uri(). '/src/img/default.jpg'; } ?>);"></div>
        <div class="content">
            <h2><?php the_title(); ?></h2>
            <div class="pub-tim">
                <?php the_date(); ?>
            </div>
        </div>
    </a>
</article>

