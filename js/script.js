// Δημιουργία μεταβλητών και αρχικοποιήσεις

let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

// όταν πατήσει το menu btn
menu.onclick = () =>
{   menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// homepage sections
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

// header pictures
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


