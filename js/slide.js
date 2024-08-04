var slideBanner = new Swiper(".slide-banner", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
var slidePromo = new Swiper(".slide-promo", {
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});