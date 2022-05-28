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

// slider for reviews
var swiper = new Swiper(".reviews-slider", {
    grabCursor:true,
    loop:true,
    autoHeight:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});


//Contact Form in PHP
const form = document.querySelector("form"),
    statusTxt = form.querySelector(".contact-form span");
form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.color = "black";
    statusTxt.style.display = "block";
    statusTxt.innerText = "Αποστολή μηνύματος...";
    form.classList.add("disabled");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response;
            if(response.indexOf("required") != -1 || response.indexOf("έγκυρο") != -1 || response.indexOf("failed") != -1){
                statusTxt.style.color = "red";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
            form.classList.remove("disabled");
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}