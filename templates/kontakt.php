<?php
/**
*
* Template name: kontakt
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
   <?php echo do_shortcode('[contact-form-7 id="292" title="Formularz 1"]'); ?>
</aside>
<div class="cover-map">
    <div class="wraper">
       <div id="mapa-it"></div>
    </div>
</div>
<?php get_footer(); ?>

<script>
function initMap() {
  var uluru = {lat: 52.1966662, lng: 20.8761392};
  var map = new google.maps.Map(document.getElementById('mapa-it'), {
    zoom: 14,
    center: uluru,
    
    styles:[{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"} ] }, {"featureType": "administrative.locality", "elementType": "all", "stylers": [{"gamma": "1.00"} ] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"} ] }, {"featureType": "landscape", "elementType": "geometry.fill", "stylers": [{"saturation": "1"} ] }, {"featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{"lightness": "23"} ] }, {"featureType": "landscape.natural", "elementType": "all", "stylers": [{"color": "#c7dba8"} ] }, {"featureType": "landscape.natural", "elementType": "geometry", "stylers": [{"saturation": "-6"} ] }, {"featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [{"lightness": "30"}, {"saturation": "13"} ] }, {"featureType": "landscape.natural.landcover", "elementType": "all", "stylers": [{"saturation": "1"} ] }, {"featureType": "landscape.natural.landcover", "elementType": "geometry.fill", "stylers": [{"saturation": "7"}, {"lightness": "11"} ] }, {"featureType": "landscape.natural.terrain", "elementType": "geometry.fill", "stylers": [{"saturation": "6"}, {"lightness": "6"} ] }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100 }, {"lightness": 45 }, {"visibility": "simplified"} ] }, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"} ] }, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#8cc02a"}, {"visibility": "simplified"}, {"weight": "3"} ] }, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#f19830"} ] }, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] }, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#a1cbfd"}, {"visibility": "on"} ] } ]
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'IT Holding Warszawa',
    icon:'<?php echo get_template_directory_uri(); ?>/src/img/pin.png',
  });
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&callback=initMap"></script>