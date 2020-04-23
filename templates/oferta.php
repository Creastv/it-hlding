<?php
/**
*
* Template name: Oferta formularz
*/
get_header(); ?>
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <div class="content-page">
           <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<aside class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
   <?php echo do_shortcode('[contact-form-7 id="295" title="Formularz-oferta"]'); ?>
</aside>
<?php if ( get_field('pakiety_display') == true ) : ?>
<aside class="pakiety <?php echo ($block['className']); ?>">
    <div class="container" itemscope itemtype="http://schema.org/Service" >
    <meta itemprop="serviceType" content="<?php the_field('nad_tytulem', 'option'); ?>" />
        <div class="row" itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog" >
            <div class="col-md-12"><hr></div>
            <div class="col-md-12 text-center section-title">
                <?php if(get_field('nad_tytulem', 'option')):?>
                <span><?php the_field('nad_tytulem', 'option'); ?></span>
                <?php endif; ?>
                <?php if(get_field('tytul', 'option')):?>
                <h2><?php the_field('tytul', 'option'); ?></h2>
                <span class="sline maincolor-sline margin-sline-20 center-sline"></span>
                <?php endif; ?>
            </div>

            <?php if( have_rows('pakiety', 'option') ): ?>
                <div class="col-pa  col-sm-0 col-md-1" ></div>
               <?php while ( have_rows('pakiety', 'option') ) : the_row(); ?>
                    <div itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="col-pa my-auto  <?php if ( get_sub_field('najczesciej_wybierany', 'option') == true ) { echo "show";} ?> <?php if ( get_sub_field('najczesciej_wybierany', 'option') == true ) { echo "col-md-4";} else { echo "col-md-3";} ?>">
                        <div class="pakiet <?php if ( get_sub_field('wyrozniony_pakiet', 'option') == true ) { echo "de";} ?> <?php if ( get_sub_field('najczesciej_wybierany', 'option') == true ) { echo "nw ";} ?>">
                            <header>
                                <div class="tab">
                                    <?php if(get_sub_field('tytul_pakietu', 'option')) :?>
                                        <?php if ( get_sub_field('najczesciej_wybierany', 'option') == true ) { ?>
                                            <span>Najczęściej wybierany</span>
                                        <?php } ?>
                                        <h3 itemprop="name" ><?php  the_sub_field('tytul_pakietu', 'option'); ?></h3>
                                    <?php endif; ?>
                                    <img class="display" src="<?php echo get_template_directory_uri(); ?>/src/img/arrow-btn.png" alt=" <?php  the_sub_field('tytul', 'option'); ?>">
                                </div>
                                <?php if(get_sub_field('cena', 'option')) :?>
                                    <h4 class="centa"><?php  the_sub_field('cena', 'option'); ?><span><?php  the_sub_field('prefix_ceny', 'option'); ?></span></h4>
                                <?php endif; ?>
                            </header>
                            <div class="content">
                                <?php if( have_rows('lista', 'option') ): ?>
                                    <ul itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" >
                                    <?php while ( have_rows('lista', 'option') ) : the_row(); ?>
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer" >
                                        <div itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                                        <span itemprop="name"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/tick.png" alt="<?php  the_sub_field('li', 'option'); ?>"> <?php  the_sub_field('li', 'option'); ?></span>
                                        </div>
                                    </li>
                                    <?php endwhile; ?>
                                    </ul>
                                    <?php  else: ?>
                                <?php endif; ?>
                                <?php if(get_sub_field('tresc-buttona', 'option') && get_sub_field('link-button', 'option')) :?>
                                    <footer>
                                        <a class="btn btn-main btn-big <?php if ( get_sub_field('najczesciej_wybierany', 'option') == false ) { echo "btn-revers"; } ?>" href="<?php  the_sub_field('link-button', 'option'); ?>"><?php  the_sub_field('tresc-buttona', 'option'); ?></a>
                                    </footer>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php  else: endif; ?>
        </div>
    </div>
</aside>
<script>
var mobile = window.innerWidth || document.documentElement.clientWidth;
if (mobile < 768) {
    var pakiets = document.querySelectorAll('.col-pa');
        pakiets.forEach(function(pakiet){
        console.log('test')
        pakiet.addEventListener('click', function(){
            pakiets.forEach(function(pakiet){
            console.log('test')
                pakiet.classList.remove('show');
            });
            pakiet.classList.add('show');
        });
    });
}
</script>
<?php endif; ?>
<?php if(get_field('tytul-of', 'option')):?>
    <div class="col-md-12 text-center">
        <hr>                    
        <br><br>
        <h2><?php the_field('tytul-of', 'option'); ?></h2>
        <span class="sline maincolor-sline center-sline margin-sline-20"></span>           
   </div>
<?php endif; ?>
    <?php if( have_rows('bullets_-_podstron', 'option') ): ?>
    <aside class="col-md-12">
        <?php $i = 1; ?>
        <ul class="oferty" itemscope itemtype="http://schema.org/ItemList">
        <?php while( have_rows('bullets_-_podstron', 'option') ): the_row(); 
                        $ikonaLk = get_sub_field('ikona');
                        $tytul = get_sub_field('tytul');
                        $opis = get_sub_field('opis');
                        $link = get_sub_field('link');
        ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <?php if( get_sub_field('link') ): ?>
                <a class="bullet" href="<?php echo $link; ?>"  itemprop="url">
            <?php else: ?>    
                <span class="bullet">
            <?php endif; ?>
                    <div class="img">
                        <img src="<?php echo $ikonaLk['url']; ?>" alt="<?php echo $ikonaLk['alt'] ?>" />
                    </div>
                    <div class="content">
                        <h3 itemprop="name" > <?php echo $tytul; ?></h3>
                        <meta itemprop="position" content="<?php echo $i++ ?>" />
                        <p><?php echo $opis; ?></p>
                    </div>
            <?php if( get_sub_field('link') ): ?>
                </a>
            <?php else: ?>    
                </span>
            <?php endif; ?>
            </li>
        <?php endwhile; ?>
        </ul>
    </<aside>
<?php endif; ?>


<?php get_footer(); ?>
