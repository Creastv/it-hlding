<div class="zarzad-osoby">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-title">
                <?php if(get_field('podtytul')):?>
                <span><?php the_field('podtytul'); ?></span>
                <?php endif; ?>
                <?php if(get_field('tytul')):?>
                <h2><?php the_field('tytul'); ?></h2>
                <span class="sline maincolor-sline margin-sline-20 center-sline"></span>
                <?php endif; ?>
            </div>
            <?php if( have_rows('osoba') ): ?>
                <div class="osoby">
                    <?php while( have_rows('osoba') ): the_row(); 
                        $image = get_sub_field('zdjecie');
                        $imienazwisko = get_sub_field('imie_i_nazwisko');
                        $tel = get_sub_field('telefon');
                        $email = get_sub_field('email');
                        $poz = get_sub_field('pozycja'); ?>
                        <div class="osoba">
                            <div class="zdjecie">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </div>
                            <div class="dane">
                                <h3> <?php echo $imienazwisko; ?></h3>
                                <?php if( $poz ): ?>
                                    <span><?php echo $poz; ?></span>
                                <?php endif; ?>
                                <?php if( $tel ): ?>
                                <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
                                <?php endif; ?>
                                <?php if( $email ): ?>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

