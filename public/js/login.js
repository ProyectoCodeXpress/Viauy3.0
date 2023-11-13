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

/*login/register*/
function toggleForm() {
    var loginForm = document.getElementById("loginForm");
    loginForm.classList.toggle("oculto");
}

function login() {

    alert("Falta usuario y contraseña");
}


