/* Lesson Carousel - check glider.js for documentation */
var glider = new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '#dots',
  draggable: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});

glider.refresh(true);
