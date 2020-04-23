// navbar
jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 992) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});

(function ($) {

  $(document).ready(function($) {
      $(window).load(function() {
          $('.img-fade').addClass('img-fade-out');
          $('#preloader').fadeOut('slow', function() { 
            $(this).remove(); 
          });
      });
  });
  
 $(document).ready(function() {
  //Check to see if the window is top if not then display button
  $(window).scroll(function() {
      if ($(this).scrollTop() > 250) {
          $('.scrollToTop').css("bottom", "50px");
          $('.progressCounter').css("bottom", "15px");
      } else {
          $('.scrollToTop').css("bottom", "-50px");
          $('.progressCounter').css("bottom", "-50px");
      }
  });
  //Click event to scroll to top
  $('.scrollToTop').click(function() {
      $('html, body').animate({ scrollTop: 0 }, 800);
      return false;
  });
});

$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault();

  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top - 120
  }, 500);
});

$(document).ready(function(){  
$(".hamburger").click(function(){  
    $(".hamburger").toggleClass(" is-active");  
  });  
}); 

// sticky navbar
var header = document.getElementById('header');
var navBar = document.getElementById('navbar');
var spaceBanner = document.getElementById('top-banner');

$(document).on( 'scroll', function(){
if ($(window).scrollTop() > spaceBanner.offsetHeight) {
    $('.navbar').addClass( "sticky" );
    $('#header').css("marginTop", + navBar.offsetHeight);
} else {
    $('.navbar').removeClass( "sticky" );
    $('#header').css("marginTop", "0px");
}
if ($(window).scrollTop() > 500) {
    $('.navbar').css("paddingTop", "0px");
    $('.navbar').css("paddingBottom", "0px");
    $('.navbar-brand img').addClass( "logo-scroll" );
} else {
    $('.navbar-brand img').removeClass( "logo-scroll" );
    $('.navbar').css("paddingTop", "5px");
    $('.navbar').css("paddingBottom", "5px");
}
});

})(jQuery);

// Progres circle scroll
$.fn.progressScroll=function(e){var r=$.extend({width:30,height:30,borderSize:2,mainBgColor:"#fff",lightBorderColor:"#8cc02a",darkBorderColor:"#8cc02a",fontSize:"10px"},e);var t,i,n,o=this,a=this.selector,s="progressScroll-border",d="progressScroll-circle",l="progressScroll-text";this.getHeight=function(){t=window.innerHeight;i=document.body.offsetHeight;n=i-t};this.addEvent=function(){var e=document.createEvent("Event");e.initEvent("scroll",false,false);window.dispatchEvent(e)};this.updateProgress=function(e){var e=Math.round(100*e);var r=e*360/100;if(r<=180){$("."+s,a).css("background-image","linear-gradient("+(90+r)+"deg, transparent 50%, #A2ECFB 50%),linear-gradient(90deg, #A2ECFB 50%, transparent 50%)")}else{$("."+s,a).css("background-image","linear-gradient("+(r-90)+"deg, transparent 50%, #8cc02a 50%),linear-gradient(90deg, #A2ECFB 50%, transparent 50%)")}$("."+l,a).text(e+"%")};this.prepare=function(){$(a).addClass("progressScroll");$(a).html("<div class='"+s+"'><div class='"+d+"'><span class='"+l+"'></span></div></div>");$(".progressScroll").css({width:r.width,height:r.height,position:"fixed",});$("."+s,a).css({position:"relative","text-align":"center",width:"100%",height:"100%","border-radius":"50%","background-color":r.darkBorderColor,"background-image":"linear-gradient(91deg, transparent 50%,"+r.lightBorderColor+"50%), linear-gradient(90deg,"+r.lightBorderColor+"50%, transparent 50%"});$("."+d,a).css({position:"relative",top:"50%",left:"50%",transform:"translate(-50%, -50%)","text-align":"center",width:r.width-r.borderSize,height:r.height-r.borderSize,"border-radius":"50%","background-color":r.mainBgColor});$("."+l,a).css({top:"50%",left:"50%",transform:"translate(-50%, -50%)",position:"absolute","font-size":r.fontSize})};this.init=function(){o.prepare();$(window).bind("scroll",function(){var e=window.pageYOffset||document.documentElement.scrollTop,r=Math.max(0,Math.min(1,e/n));o.updateProgress(r)});$(window).bind("resize",function(){o.getHeight();o.addEvent()});$(window).bind("load",function(){o.getHeight();o.addEvent()})};o.init()};
jQuery(".progressCounter").progressScroll();


