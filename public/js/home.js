var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

$(document).ready(function() {
  $('#navbarScrollingDropdown').on('click', function(e) {
      e.preventDefault();
      var href = $(this).data('href');
      window.location.href = href;
  });
});