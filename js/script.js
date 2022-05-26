// Δημιουργία μεταβλητών και αρχικοποιήσεις

let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

// όταν πατήσει το menu btn
menu.onclick = () =>
{   menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}