<?php
/**
*
* Template name: Home
*/
get_header(); ?>
 <!-- If we need navigation buttons -->
 <?php if( have_rows('slider_home') ): ?>
    <div class="swiper-container swiper-header swiper-home">
        <div class="swiper-wrapper">
                <?php while( have_rows('slider_home') ): the_row(); 
                    $image = get_sub_field('zdjecie');  ?>
                    <div class="swiper-slide" style="background:url(<?php echo $image['url']; ?>);" >
                        <div class="wraper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wraper-content">
                                            <div class="content">
                                               <?php if(get_sub_field('naglowek')):?>
                                                    <div class="naglowek ">
                                                       <?php the_sub_field('naglowek') ?>
                                                       <span class="sline center-sline"></span>
                                                    </div>
                                                <?php endif;?>
                                                <?php if(get_sub_field('opis')):?>
                                                    <div class="opis">
                                                       <?php the_sub_field('opis') ?>
                                                    </div>
                                                <?php endif;?>

                                                <?php if( have_rows('button') ): ?>
                                                    <div class="buttons">
                                                    <?php  while( have_rows('button') ): the_row(); ?>
                                                        <a href="<?php the_sub_field('link_buttona'); ?>" class="btn btn-main btn-big <?php the_sub_field('przezroczysty'); ?>"><?php the_sub_field('tresc_buttona'); ?></a>
                                                    <?php endwhile; ?>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
        </div>
        <?php if( have_rows('logotypy') ): ?>
           
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="logos">
                        <?php while( have_rows('logotypy') ): the_row(); 
                            $image = get_sub_field('logo'); ?>
                            <div class="img">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </div>
                        <?php endwhile; ?>
                        </div>
                        </div>
                    </div>
                </div>

        <?php endif; ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination-home"></div>
<?php else: ?>
    <div class="cover">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.693 84"><path d="M1621.326 56.018l-663.276-.28-663.276.28c-40.195.228-86.289-4.753-142.459-17.064L-149.307-30.8V84.736h2216V-31.097l-302.908 70.051c-56.169 12.311-102.264 17.292-142.459 17.064z" fill="#fff"/></svg>
    </div>
<?php endif; ?>
<article>
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           <?php if(get_field('podobne_wpisy', 'option')): ?>
                <section class="post-rec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <hr>
                                <?php if(get_field('naglowek_rekomendacje', 'option')):?>
                                    <span>Aktualności</span>
                                <h2><?php the_field('naglowek_rekomendacje', 'option'); ?></h2>
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
            <?php endif; ?>  
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<?php get_footer(); ?>
