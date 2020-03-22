// navbar

jQuery("#search-icon").click(function() {
    console.log('testghkj');
    jQuery(".nav").toggleClass("search");
    jQuery(".nav").toggleClass("no-search");
    jQuery(".search-input").toggleClass("search-active");
  });
  
jQuery('.menu-toggle').click(function(){
     jQuery(".nav").toggleClass("mobile-nav");
     jQuery(this).toggleClass("is-active");
});