<section class="onas <?php echo ($block['className']); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-auto">
            <div class="kv-content">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/src/img/sygnet-onas.png" alt="">
                <h3><?php the_field('duzy_tekst'); ?></h3>
                <?php if(get_field('tresc_buttona') && get_field('link_buttona')):?>
                  <a class="btn-box" href="<?php the_field('link_buttona'); ?>"><?php the_field('tresc_buttona'); ?> <img src="<?php echo get_template_directory_uri(); ?>/src/img/arrow-btn.png" alt=""></a>
                <?php endif; ?>
            </div>
            </div>
            <div class="col-md-7 my-auto">
            <div class="content">
            <?php if( have_rows('bullets') ): ?>
                <?php while( have_rows('bullets') ): the_row(); 
                    $ikona = get_sub_field('ikona');
                    $tytul = get_sub_field('tytul');
                    $tresc = get_sub_field('tresc_bulletu');
                    ?>
                    <div class="bullet">
                        <div class="img">
                            <img src="<?php echo $ikona['url']; ?>" alt="<?php echo $ikona['alt'] ?>" />
                        </div>
                        <div class="desc">
                            <h3><?php echo $tytul; ?></h3>
                            <span class="sline maincolor-sline margin-sline-10"></span>
                            <?php echo $tresc; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</section>

