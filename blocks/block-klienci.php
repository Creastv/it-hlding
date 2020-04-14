<section class="klienci <?php echo ($block['className']); ?>" style="background-color:<?php the_field('kolor_tla'); ?>">
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
            <div class="col-md-12">
                <?php if( have_rows('klienci') ): ?>
                    <div class="logotypy">
                    <?php while( have_rows('klienci') ): the_row(); 
                        // vars
                        $image = get_sub_field('logo');
                        $link = get_sub_field('link');
                        ?>
                            <?php if( $link ): ?>
                                <a href="<?php echo $link; ?>">
                            <?php endif; ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <?php if( $link ): ?>
                                </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


