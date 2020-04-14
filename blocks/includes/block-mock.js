function mockPhone(ev) {
    var mock = document.getElementById('mock');
    var distanceToTop = mock.getBoundingClientRect().top;
    if(distanceToTop <= window.screen.height - 300){
      mock.classList.add('mock-show');
    } else {
      mock.classList.remove('mock-show');
    }
  };
 
var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
if (viewportWidth > 768) {
  window.addEventListener('scroll', mockPhone);
} 