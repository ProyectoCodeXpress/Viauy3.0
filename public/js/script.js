var swiper = new swiper(".mySwiper", {
    slidesPerView:1,
    centeredSlides:true,
    loop:true,
    spaceBetween: 30,
    grabCursor:true,
    navegation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints : {
        991:{
            slidesPerView: 3
        }
    }
})