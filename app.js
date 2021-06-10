
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