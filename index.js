
const menu = document.getElementById('nav-wrapper');
const menuIcon = document.querySelector('.hamburger');
const navList = document.querySelector('.main-nav');



menu.style.maxHeight = "0px";

menuIcon.addEventListener('click', displayMenu);

function displayMenu(){
    if(menu.style.maxHeight == "0px"){
       menu.style.maxHeight = "600px";
    }
    else{
        menu.style.maxHeight = "0px";
    }
}
