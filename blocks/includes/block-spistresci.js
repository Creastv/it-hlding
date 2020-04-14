(function ($) {
    var distance = $('.spistresci').offset().top;
    var heightSpis = $('.spistresci').height()
    var navBar = document.getElementById('navbar');
    console.log(heightSpis)
    $(document).scroll(function() {
        if ( $(this).scrollTop() >= distance + (navBar.offsetHeight + heightSpis) ) {
          $('.anchorSpis').addClass("sticky");
        } else {
          $('.anchorSpis').removeClass("sticky");
        }
    });
  })(jQuery);