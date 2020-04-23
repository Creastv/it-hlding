<section class="testimonial-wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-title">
                <?php if(get_field('nad_tytul')):?>
                <span><?php the_field('nad_tytul'); ?></span>
                <?php endif; ?>
                <?php if(get_field('tytul')):?>
                <h2><?php the_field('tytul'); ?></h2>
                <span class="sline maincolor-sline margin-sline-20 center-sline"></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <svg id="border-top-testymonial" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1922 135.106"><path d="M0 1.166s479.757 122 960 122c480.757 0 962-122 962-122v133.94H0V1.166z" fill-rule="evenodd" clip-rule="evenodd" fill="#f8f8f8"></path></svg>
    <div class="testimonial-it <?php echo ($block['className']); ?>" <?php if(get_field('kolor_tla')) { ?>style=" background-color: <?php the_field('kolor_tla') ?>;"<?php } ?>> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                        <?php if( have_rows('testimonial') ): ?>
                            <div class="swiper-container swiper-testimonial">
                                <div class="swiper-wrapper">
                                <?php while( have_rows('testimonial') ): the_row(); 

                                    $logo = get_sub_field('logo');
                                    $linkLogo = get_sub_field('link_do_loga');
                                    $nazwa = get_sub_field('nazwa_firmy');
                                    $adres = get_sub_field('adres_firmy');
                                    $opis = get_sub_field('opis');

                                    ?>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="inf">
                                                <div class="logo">
                                                    <?php if( $linkLogo ): ?>
                                                        <a href="<?php echo $linkLogo; ?>">
                                                    <?php endif; ?>
                                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
                                                    <?php if( $linkLogo ): ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="adres">
                                                    <?php if( $nazwa ): ?>
                                                    <h3><?php echo $nazwa ?></h3>
                                                    <?php endif; ?>
                                                    <?php if( $adres ): ?>
                                                    <span><?php echo $adres ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php if( $opis ): ?>
                                                <div class="opis">
                                                    <p><i><?php echo $opis ?></i></p>
                                                </div>
                                            <?php endif; ?>
                                        
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            </div>
                        <?php endif; ?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
