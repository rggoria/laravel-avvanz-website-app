var swiper1 = new Swiper(".awardSwiper", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    speed: 1000,
    rewind: true,
    autoplay: {
        delay: 20000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper2 = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 150,
    speed: 1000,
    rewind: true,
    autoplay: {
        delay: 20000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});
