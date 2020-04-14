<?php
function register_acf_block_types() {

    // register Block.
    acf_register_block_type(array(
        'name'              => 'testimonials-carousel',
        'title'             => __('testimonials - carousel'),
        'description'       => __('Block testimonials'),
        'render_template'   => 'blocks/block-testimonials.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'wpisy' ),
        
            'enqueue_assets'    => function(){
                if ( !is_page_template('templates/home.php')){
                wp_enqueue_style( 'cr_svipeer_css', get_template_directory_uri().'/src/css/swiper.min.css' );
                wp_enqueue_script('cr-swiper-js', 'https://unpkg.com/swiper/js/swiper.min.js',  array(), '20130456', true );
                }
                wp_enqueue_script( 'block-slider-script', get_template_directory_uri() . '/blocks/includes/block-carousel.js', array(), '20130457', true );
            },
    ));
     // register Block.
    acf_register_block_type(array(
        'name'              => 'ostatnie_posty',
        'title'             => __('Ostatnieposty'),
        'description'       => __('Block wyświetlający ostatnie 4 posty.'),
        'render_template'   => 'blocks/block-last-post.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Posty' ),
        
    ));
    acf_register_block_type(array(
        'name'              => 'tekst-block-left',
        'title'             => __('Tekst block - zdj. po lewej'),
        'description'       => __('tekst block ze zdjęciem.'),
        'render_template'   => 'blocks/block-tekst-block-left.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Tekst' ),
    ));
    acf_register_block_type(array(
        'name'              => 'tekst-block-right',
        'title'             => __('Tekst block - zdj. po prawej'),
        'description'       => __('tekst block ze zdjęciem.'),
        'render_template'   => 'blocks/block-tekst-block-right.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Tekst' ),
    ));
    acf_register_block_type(array(
        'name'              => 'onas',
        'title'             => __('Onas'),
        'description'       => __('block o nas.'),
        'render_template'   => 'blocks/block-o-nas.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Tekst' ),
    ));
    acf_register_block_type(array(
        'name'              => 'Klienci',
        'title'             => __('Klienci (logos)'),
        'description'       => __('block o naszych klientach.'),
        'render_template'   => 'blocks/block-klienci.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Klienci' ),
    ));
    acf_register_block_type(array(
        'name'              => 'mockup',
        'title'             => __('Muckup + Bullets'),
        'description'       => __('block o naszych klientach.'),
        'render_template'   => 'blocks/block-mockup.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'mockup' ),
    ));
    acf_register_block_type(array(
        'name'              => 'spistresci',
        'title'             => __('Spis treści'),
        'description'       => __('block o naszych klientach.'),
        'render_template'   => 'blocks/block-spistresci.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'spis treści' ),
        'enqueue_assets'    => function(){
            wp_enqueue_script( 'block-spistresci', get_template_directory_uri() . '/blocks/includes/block-spistresci.js', array(), '20130457', true );
        },
    ));
    acf_register_block_type(array(
        'name'              => 'Pakiety',
        'title'             => __('pakiety'),
        'description'       => __('Pakiety w 3 kolumnach.'),
        'render_template'   => 'blocks/block-pakiety.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Pakiety' ),
        'enqueue_assets'    => function(){
            wp_enqueue_script( 'block-mockup', get_template_directory_uri() . '/blocks/includes/block-mock.js', array(), '20130457', true );
        },
    ));

    acf_register_block_type(array(
        'name'              => 'table',
        'title'             => __('Tabela'),
        'description'       => __('Tabela.'),
        'render_template'   => 'blocks/block-table.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Table' ),
    ));

    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('Akordeon'),
        'description'       => __('Akordeon'),
        'render_template'   => 'blocks/block-accordion.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Akordeon' ),
    ));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
?>
