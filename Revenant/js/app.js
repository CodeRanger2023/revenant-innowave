const accordionButtons = document.querySelectorAll('.accordion-button');

accordionButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    this.classList.toggle('active');
    const icon = this.querySelector('i');
    icon.classList.toggle('fa-plus');
    icon.classList.toggle('fa-minus');
  });
});

$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        loop: true,
      },
      600: {
        items: 3,
        nav: false,
        loop: true,
      },
      1000: {
        items: 5,
        nav: false,
        loop: true,
      },
    },
  });
});
