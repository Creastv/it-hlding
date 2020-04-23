
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
<svg id="border-top-mock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1922 135.106"><path d="M0 1.166s479.757 122 960 122c480.757 0 962-122 962-122v133.94H0V1.166z" fill-rule="evenodd" clip-rule="evenodd" fill="#f8f8f8"/></svg>
<!-- <div class="border-circle">
    <div class="circle"></div>
</div> -->
<section class="mockup <?php echo ($block['className']); ?> ">
    <div class="container">
        <div class="row">
            <div class="animate-circles">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div class="col-md-4">
                <?php if( have_rows('bullets_lewa_kolumna') ): ?>
                    <?php while( have_rows('bullets_lewa_kolumna') ): the_row(); 
                        $ikonaLk = get_sub_field('ikona');
                        $tytul = get_sub_field('tytul');
                        $opis = get_sub_field('opis');
                        $link = get_sub_field('link');
                        ?>
                            <?php if( get_sub_field('link') ): ?>
                                <a class="bullet" href="<?php echo $link; ?>">
                            <?php else: ?>    
                               <span class="bullet">
                            <?php endif; ?>
                                    <div class="img">
                                        <img src="<?php echo $ikonaLk['url']; ?>" alt="<?php echo $ikonaLk['alt'] ?>" />
                                    </div>
                                    <div class="content">
                                        <h3> <?php echo $tytul; ?></h3>
                                        <p><?php echo $opis; ?></p>
                                    </div>
                            <?php if( get_sub_field('link') ): ?>
                                </a>
                            <?php else: ?>    
                                </span>
                            <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div id="mock" class="mock text-center">
                    <img class="img-fluid " src="<?php echo get_template_directory_uri(); ?>/src/img/search-google2-2.gif" alt="">
                            
                </div>
                
            </div>
            <div class="col-md-4">
                <?php if( have_rows('bullets_prawa_kolumna') ): ?>
                    <?php while( have_rows('bullets_prawa_kolumna') ): the_row(); 
                        $ikonaPk = get_sub_field('ikona');
                        $tytul = get_sub_field('tytul');
                        $opis = get_sub_field('opis');
                        $link = get_sub_field('link');
                        ?>
                            <?php if( get_sub_field('link') ): ?>
                                <a class="bullet" href="<?php echo $link; ?>">
                            <?php else: ?>    
                               <span class="bullet">
                            <?php endif; ?>
                                    <div class="img">
                                        <img src="<?php echo $ikonaPk['url']; ?>" alt="<?php echo $ikonaPk['alt'] ?>" />
                                    </div>
                                    <div class="content">
                                        <h3> <?php echo $tytul; ?></h3>
                                        <p><?php echo $opis; ?></p>
                                    </div>
                            <?php if( get_sub_field('link') ): ?>
                                </a>
                            <?php else: ?>    
                                </span>
                            <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>





