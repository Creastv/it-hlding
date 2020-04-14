var swiper = new Swiper('.swiper-home', {
    effect: 'fade',
    slidesPerView: 1,
    lazy: true,
    // loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination-home',
      dynamicBullets: true,
      clickable: true,
    },
  });

  


