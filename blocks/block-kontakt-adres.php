<div class="kontakt-adres">
    <div class="wraper" style="background-image:url( <?php if( get_field('zdjecie_w_tle') ): ?><?php the_field('zdjecie_w_tle'); ?><?php else : ?><?php echo get_template_directory_uri(). '/src/img/it-holding-map.jpg'; ?><?php endif; ?>);">
        <address>
            <?php if( get_field('nazwa_firmy') ): ?>
                <h3> <?php the_field('nazwa_firmy'); ?></h3>
            <?php endif; ?>
            <?php if( get_field('adres') ): ?>
                <p><?php the_field('adres'); ?></p>
            <?php endif; ?>
            <?php if( get_field('osoba_kontaktu') ): ?>
                <p><b><?php the_field('osoba_kontaktu'); ?></b></p>
            <?php endif; ?>
            <?php if( get_field('email') ): ?>
                <a href="mailto:<?php the_field('email'); ?>"><b><?php the_field('email'); ?></b></a><br>
            <?php endif; ?>
            <?php if( get_field('telefon') ): ?>
                <a href="tel:<?php the_field('telefon'); ?>"><b><?php the_field('telefon'); ?></b></a>
            <?php endif; ?>
        </address>
        <?php if( have_rows('buttony') ): ?>
            <div class="buttons ">
        <?php while ( have_rows('buttony') ) : the_row(); ?>
            <a href="<?php  the_sub_field('link'); ?>" class="btn btn-main <?php  the_sub_field('styl_buttona'); ?>"><?php  the_sub_field('tresc'); ?></a>
            <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
</div>

