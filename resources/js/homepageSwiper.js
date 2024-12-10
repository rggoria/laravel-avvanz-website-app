import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

var swiper1 = new Swiper(".awardSwiper", {
    modules: [Navigation, Pagination],
    slidesPerView: 1, // Lower slidesPerView to match the number of slides
    centeredSlides: true,
    spaceBetween: 30,
    speed: 1000,
    rewind: true,
    loop: true,
    autoplay: {
        delay: 20000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper2 = new Swiper(".mySwiper", {
    modules: [Navigation, Pagination], // Pass the required modules here
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
