$(document).ready((function () {
    AOS.init()
})), $((function () {
    new Swiper(".swiper-container", {
        loop: !0,
        pagination: ".swiper-pagination",
        paginationClickable: !0,
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev"
    })
}));
