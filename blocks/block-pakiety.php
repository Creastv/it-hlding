
<svg id="bg-pakiety"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1923.718 673"><path d="M960.858 125.462C480.186 125.462 0 3.353 0 3.353v544.492s480.186 122.109 960.858 122.109c481.187 0 962.86-122.109 962.86-122.109V3.353s-481.673 122.109-962.86 122.109z" fill="#ececec"/></svg>
<section class="pakiety <?php echo ($block['className']); ?>">
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
           
            <?php if( have_rows('pakiety') ): ?>
                <div class="col-pa  col-sm-0 col-md-1" ></div>
               <?php while ( have_rows('pakiety') ) : the_row(); ?>

                    <div class="col-pa my-auto  <?php if ( get_sub_field('najczesciej_wybierany') == true ) { echo "show";} ?> <?php if ( get_sub_field('najczesciej_wybierany') == true ) { echo "col-md-4";} else { echo "col-md-3";} ?>">
                        <div class="pakiet <?php if ( get_sub_field('wyrozniony_pakiet') == true ) { echo "de";} ?> <?php if ( get_sub_field('najczesciej_wybierany') == true ) { echo "nw ";} ?>">
                            <header>
                                <div class="tab">
                                    <?php if(get_sub_field('tytul')) :?>
                                        <?php if ( get_sub_field('najczesciej_wybierany') == true ) { ?>
                                            <span>Najczęściej wybierany</span>
                                        <?php } ?>
                                        <h3><?php  the_sub_field('tytul'); ?></h3>
                                    <?php endif; ?>
                                    <img class="display" src="<?php echo get_template_directory_uri(); ?>/src/img/arrow-btn.png" alt=" <?php  the_sub_field('tytul'); ?>">
                                </div>
                                <?php if(get_sub_field('cena')) :?>
                                    <h4 class="centa"><?php  the_sub_field('cena'); ?><span><?php  the_sub_field('prefix_ceny'); ?></span></h4>
                                <?php endif; ?>
                            </header>
                            <div class="content">
                                <?php if( have_rows('lista') ): ?>
                                    <ul>
                                    <?php while ( have_rows('lista') ) : the_row(); ?>
                                    <li><?php  the_sub_field('li'); ?></li>
                                    <?php endwhile; ?>
                                    </ul>
                                    <?php  else: ?>
                                <?php endif; ?>
                                <?php if(get_sub_field('tresc-buttona') && get_sub_field('link-button')) :?>
                                    <footer>
                                        <a class="btn btn-main btn-big <?php if ( get_sub_field('najczesciej_wybierany') == false ) { echo "btn-revers"; } ?>" href="<?php  the_sub_field('link-button'); ?>"><?php  the_sub_field('tresc-buttona'); ?></a>
                                    </footer>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php  else: endif; ?>
        </div>
    </div>
</section>
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

