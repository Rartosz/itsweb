
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


