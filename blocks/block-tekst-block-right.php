<section class="content-box-lp <?php echo ($block['className']); ?>">
    <div class="container">
        <div class="row align-middle">
            <div class="col-md-6 col-lg-6 my-auto order-sm-1">
                <?php if(get_field('nad_tytulem')):?>
                   <span class="sub"><?php the_field('nad_tytulem'); ?></span>
                <?php endif; ?>
                <?php if(get_field('tytul')):?>
                  <h2><?php the_field('tytul'); ?></h2>
                  <span class="sline maincolor-sline margin-sline-20"></span>
                <?php endif; ?>
                <?php if(get_field('tekst')):?>
                  <?php the_field('tekst'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-lg-6 my-auto order-sm-2">
                <div class="img img-right text-center">
                <?php if(get_field('tresc_buttona_r') && get_field('link_buttona_r')):?>
                        <a class="btn btn-box" href="<?php the_field('link_buttona_r'); ?>"><?php the_field('tresc_buttona_r'); ?> <img src="<?php echo get_template_directory_uri(); ?>/src/img/arrow-btn.png" alt=""> </a>
                    <?php endif; ?>
                    <img class="kv img-fluid" src="<?php echo get_template_directory_uri(); ?>/src/img/ani.png" alt="">
            
                   
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$padding_zdjecia = get_field('padding_zdjecia');
if( $padding_zdjecia ): ?>
<style type="text/css">
.content-box-lp .kv {
        padding: <?php echo $padding_zdjecia; ?>px;
    }
</style>
<?php endif; ?>