
new TypeIt(".typeWrapper__text",
{
    strings: ["Strony WWW", "Aplikacje mobilne" ,"Grafika", "Design"],
    speed: 100,
    waitUntilVisible: false,
    startDelay:2000,
    loop:true
}).go();




//Scroll menu 
window.onscroll = function() 
{
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)
    {
        let header = document.querySelector(".header");
        header.classList.add("header--scrolled");
        let logo = document.querySelector(".header__logo img");
        logo.src="img/logo_black.png";
    }
    else 
    {
        let header = document.querySelector(".header");
        header.classList.remove("header--scrolled");
        let logo = document.querySelector(".header__logo img");
        logo.src="img/logo_white.png";
    }
}


//Open Mobile Menu 

let hamburgerBtn = document.querySelector(".header__hamburger");

hamburgerBtn.addEventListener("click", function() 
{
    let first = document.querySelector(".first");
    let second = document.querySelector(".second");
    let third = document.querySelector(".third");
    let nav = document.querySelector(".header__nav");

    first.classList.toggle("first--open");
    second.classList.toggle("second--open");
    third.classList.toggle("third--open");
    nav.classList.toggle("header__nav--open");

});



// onload delate preloader 

window.onload = function() 
{
    let preloader = document.querySelector(".preloader");
    preloader.classList.add("preloader--close");
    setTimeout(function() 
    {
        preloader.remove();
    },3000);
}




// FORM VALIDATE


function validateForm() {
    let input_email = document.forms["contact__form"]["form__input--email"].value;
    if (input_email=="" || input_email == null) {
      alert("Proszę wpisać swój adres mailowy :) ");
      return false;
    }
    else 
    {
      alert("Dziękujemy za kontakt!");
    }
  } 



// wybierz pakiet 

let selectBtn = [...document.querySelectorAll(".card__select")];
let titles = document.querySelectorAll(".cards__card h2");
for(let i=0; i<selectBtn.length; i++) 
{
    selectBtn[i].addEventListener("click", function() 
    {
        const textArea = document.querySelector(".form__textarea");
        textArea.innerHTML=" ";
        textArea.innerHTML="Wybieram pakiet: " + titles[i].innerHTML;
    });
}



