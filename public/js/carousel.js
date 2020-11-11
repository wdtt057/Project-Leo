/* Lesson Carousel - check glider.js for documentation */
var glider = new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '#dots',
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  },
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});

glider.refresh(true);
