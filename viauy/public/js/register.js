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

/*register*/
function toggleForm() {
    var registerForm = document.getElementById("registerForm");
    registerForm.classList.toggle("oculto");
}


function register() {
    // Aquí puedes agregar el código para procesar el registro
    alert("Bienvenido");
}
