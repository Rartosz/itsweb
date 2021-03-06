<?php 

if(isset($_POST['form__submit'])){
    $to = "itsolutions.kontakt@gmail.com";
    $from = $_POST['form__input--email']; 
    $name = $_POST['form__input--name'];
    $message = $name . " " . $from . " napisal: " . $_POST['form__textarea'];
    
    mail($to,$from,$message);
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Strony internetowe, sklepy online, grafika</title>
        <meta name="description" content="Strony internetowe, sklepy online i grafika dla firm i klientów prywatnych. Sprawdź!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <meta property="og:image" content="img/logofb.jpg">
        <meta property="og:description" content="Strony internetowe, sklepy online i grafika dla firm i klientów prywatnych. Sprawdź!">
        <link rel="icon" href="img/favicon.svg" sizes="48x48" type="image/svg">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
               <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171397768-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-171397768-1');
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
          $("a").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
                window.location.hash = hash;
              });
            }
          });
        });
        </script>

    </head>
    <body>

        <div class="preloader">
            <div class="dash uno"></div>
            <div class="dash dos"></div>
            <div class="dash tres"></div>
            <div class="dash cuatro"></div>
        </div>

        <header class="header">
            <a href="#" class="header__logo">
                <img src="img/logo_white.png">
            </a>
            <button class="header__hamburger">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </button>
            <nav class="header__nav">
                    <a href="#onas" class="nav__link">O NAS</a>
                    <a href="#oferta" class="nav__link">OFERTA</a>
                    <a href="#portfolio" class="nav__link">PORTFOLIO</a>
                    <a href="#kontakt" class="nav__link nav__link--kontakt">KONTAKT</a>

                    <a href="index.html" class="nav__link nav__link--language"><img src="img/PL.png"></a>
                    <a href="en/index.html" class="nav__link nav__link--language"><img src="img/US.png"></a>
            </nav>
        </header>

        <main class="main">
            <div class="main__typeWrapper">
                <span class="typeWrapper__text" ></span>
                <span class="typeWrapper__text" ></span>
                <span class="typeWrapper__text" ></span>
                <span class="typeWrapper__text" ></span>
            </div>
            <a href="#oferta" class="main__link">SPRAWDŹ OFERTĘ</a>
            
        </main>

        <section class="about" id="onas">

            <div class="about__textWrapper" data-aos="fade-right">
                <div class="textWrapper__text">
                    <h1>O NAS</h1>
                    <p1>Jesteśmy grupą studentów kierunków informatycznych, którzy pasjonują się robieniem stron internetowych, social media'mi oraz grafiką komputerową od dawna. Stworzymy profesjonalną witrynę, grafikę oraz stronę na facebooku dla Twojej firmy, zgodną z aktualnymi trendami, zachęcającą do przeglądania.</p1>
                </div>
                <img src="img/onas.svg" class="textWrapper__img">
            </div>

            <div class="about__textWrapper about__textWrapper--reverse" data-aos="fade-left">
                <div class="textWrapper__text">
                    <h1>DLACZEGO MY?</h1>
                    <p1>W naszych projektach stawiamy na profesjonalizm, a więc na oryginalność, płynne działanie strony oraz szybkie ładowanie się jej, stronimy zatem od gotowych szablonów w kreatorach stron www. Każda tworzona przez nas strona jest optymalizowana pod kątem wyszukiwarek, a dodane do każdej strony narzędzie Google Analytics powie Ci, ile osób odwiedza Twoją witrynę! Po zakończonej współpracy oferujemy kompleksowe wsparcie techniczne oraz do 5 dowolnych poprawek! Nie wiesz, który pakiet jest dla Ciebie najlepszy? Napisz do nas!</p1>
                </div>
                <img src="img/dlaczegomy.svg" class="textWrapper__img">
            </div>

            <div class="about__textWrapper" data-aos="fade-right">
                <div class="textWrapper__text">
                    <h1>NASZE TECHNOLOGIE</h1>
                    <p1>Do tworzenia stron internetowych z możliwością edycji treści wykorzystujemy sprawdzony CMS jakim jest Wordpress. Sklepy internetowe tworzymy w CMS do tego przeznaczonym jakim jest PrestaShop, lecz najlepszym rozwiązaniem według nas jest napisanie strony internetowej w czystym kodzie, co wyróżni ją na tle konkurencji! Do każdej strony dodajemy Google Analytics, które pozawala na obserwowanie ile osób odwiedza dziennie witrynę.</p1>
                </div>
                <img src="img/stack.svg" class="textWrapper__img">
            </div>


            <div class="about__whatWeDo">

                <h1>CZYM SIĘ ZAJMUJEMY?</h1>
                <div class="whatWeDo__wrapper">

                    <div class="wrapper__offer">
                        <img src="img/1-graphics.svg" class="offer__icon">
                        <h2>GRAFIKA</h2>
                        <p2>Stworzymy grafikę dla Twojej firmy lub na konkretne wydarzenie.</p2>
                    </div>

                    <div class="wrapper__offer">
                        <img src="img/2-web.svg" class="offer__icon">
                        <h2>STRONY INTERNETOWE</h2>
                        <p2>Stworzymy stronę internetową dla Twojej firmy.</p2>
                    </div>

                    <div class="wrapper__offer">
                        <img src="img/3-advert.svg" class="offer__icon">
                        <h2>REKLAMY I ANIMACJE</h2>
                        <p2>Stworzymy reklamę statyczną lub animowaną dla Twojej firmy.</p2>
                    </div>

                    <div class="wrapper__offer">
                        <img src="img/4-socialmedia.svg" class="offer__icon">
                        <h2>SOCIAL MEDIA</h2>
                        <p2>Stworzymy i poprowadzimy stronę Twojej firmy w mediach społecznościowych</p2>
                    </div>

                    <div class="wrapper__offer">
                        <img src="img/5-odswiez.svg" class="offer__icon">
                        <h2>ODŚWIEŻENIE TWOJEJ STRONY</h2>
                        <p2>Unowocześnimy Twoją stronę oraz dodamy nowe elementy/funkcjonalności.</p2>
                    </div>
                </div>
            </div>

            <div class="swiper-container">
                <h1>NASZE NARZĘDZIA</h1>

                <div class="swiper-wrapper">
                    <img src="img/narzedzia/adobe-xd.svg" class="swiper-slide">
                    <img src="img/narzedzia/android.png" class="swiper-slide">
                    <img src="img/narzedzia/cordova.png" class="swiper-slide">
                    <img src="img/narzedzia/css.png" class="swiper-slide">
                    <img src="img/narzedzia/html.png" class="swiper-slide">
                    <img src="img/narzedzia/jquery.png" class="swiper-slide">
                    <img src="img/narzedzia/js.png" class="swiper-slide">
                    <img src="img/narzedzia/mongo.png" class="swiper-slide">
                    <img src="img/narzedzia/node.png" class="swiper-slide">
                    <img src="img/narzedzia/photoshop-logo-3.png" class="swiper-slide">
                    <img src="img/narzedzia/php.png" class="swiper-slide">
                    <img src="img/narzedzia/presta.png" class="swiper-slide">
                    <img src="img/narzedzia/react.svg" class="swiper-slide">
                    <img src="img/narzedzia/sass.svg" class="swiper-slide">
                    <img src="img/narzedzia/woo.png" class="swiper-slide">
                    <img src="img/narzedzia/wordpress.png" class="swiper-slide">
                </div>
            </div>

        </section>


        <section class="offer" id="oferta">
            <h2>OFERTA</h2>
            
            <div class="offer__cards">
                <div class="cards__card">
                    <img src="img/offer/6-sklep.svg" class="card__icon">
                    <h2>SKLEP INTERNETOWY</h2>
                    <h3>od 1699 PLN</h3>
                    <span class="card__profit">Twój spersonalizowany sklep internetowy</span>
                    <span class="card__profit">5 zakładek i 20 produktów</span>
                    <span class="card__profit">Możliwość edycji oraz wsparcie techniczne</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>

                <div class="cards__card">
                    <img src="img/offer/1-odswiezenie.svg" class="card__icon">
                    <h2>ODŚWIEŻENIE STRONY</h2>
                    <h3>od 99 PLN</h3>
                    <span class="card__profit">Dodanie elementów na stronę</span>
                    <span class="card__profit">Unowocześnienie strony</span>
                    <span class="card__profit">Dodanie nowych funkcjonalności</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>

                <div class="cards__card">
                    <img src="img/offer/2-stronawww.svg" class="card__icon">
                    <h2>TWOJA STRONA WWW</h2>
                    <h3>od 699 PLN</h3>
                    <span class="card__profit">Indywidualna szata graficzna</span>
                    <span class="card__profit">Hosting przez rok</span>
                    <span class="card__profit">Do 5 dowolnych poprawek</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>

                <div class="cards__card">
                    <img src="img/offer/3-grafika.svg" class="card__icon">
                    <h2>GRAFIKA</h2>
                    <h3>od 49 PLN</h3>
                    <span class="card__profit">Logo Twojej firmy</span>
                    <span class="card__profit">Grafika na konkretne wydarzenie</span>
                    <span class="card__profit">Reklamy</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>

                <div class="cards__card">
                    <img src="img/offer/4-dod_elem.svg" class="card__icon">
                    <h2>DODANIE ELEMENTÓW NA STRONĘ</h2>
                    <h3>od 99 PLN</h3>
                    <span class="card__profit">Dodanie nowej funkcjonalności</span>
                    <span class="card__profit">Zmiany w treści</span>
                    <span class="card__profit">Zmiany w wyglądzie</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>

                <div class="cards__card">
                    <img src="img/offer/5-socialmedia.svg" class="card__icon">
                    <h2>SOCIAL MEDIA</h2>
                    <h3>od 999 PLN</h3>
                    <span class="card__profit">Facebook oraz Instagram</span>
                    <span class="card__profit">Codzienne posty</span>
                    <span class="card__profit">Indywidualne grafiki i reklamy</span>
                    <a class="card__select" href="#kontakt">Wybieram</a>
                </div>
            </div>
        </section>


        <section class="portfolio" id="portfolio">

            <h2>PORTFOLIO</h2>

            <div class="portfolio__example">
                <a href="http://malgorzatakalinowska.com/" class="example__link">Zobacz <br><br> Małgorzata Kalinowska</a>
            </div>

            <div class="portfolio__example">
                <a href="https://www.isp-klima.pl/" class="example__link">Zobacz <br><br> ISP-Klima</a>
            </div>

            <div class="portfolio__example">
                <a href="www.katarzynawala.pl" class="example__link">Zobacz <br><br> Grafik Katarzyna Wala</a>
            </div>

            <div class="portfolio__example">
                <a href="https://www.karolinabraclawiec.pl/" class="example__link">Zobacz <br><br> Karolina Bracławiec</a>
            </div>

            <div class="portfolio__example">
                <a href="www.hegemon.com.pl" class="example__link">Zobacz <br><br> Hegemon</a>
            </div>
        </section>

        <section class="contact" id="kontakt">
                <h2 class="contact__h2">KONTAKT</h2>
                <div class="contact__info">
                    <a class="info__fb" href="https://www.facebook.com/ITSolutionsPL/"><img src="img/fblogo.png">fb.com/ITSolutionsPL</a>
                    <a class="info__mail" ><img src="img/mailicon.png">itsolutions.kontakt@gmail.com</a>
                </div>
                <form class="contact__form" id="contact__form" name="contact__form" method="POST" onsubmit="return validateForm()" action="">
                <input type="text" class="form__input form__input--name" id="form__input--name" name="form__input--name" placeholder="Imię...">
                <input type="text" class="form__input form__input--email" id="form__input--email" name="form__input--email" required placeholder="E-mail...">
                <textarea class="form__textarea" id="form__textarea" name="form__textarea" placeholder="Wiadomość..."></textarea>
                <input type="submit" class="form__submit" name="form__submit" id="form__submit" value="Wyślij">
                </form>
        </section>

        <footer class="footer">
            <span class="footer__copyright">© 2021 ITSolutions. Wszystkie prawa zastrzeżone.</span>
        </footer>


        <script src="app.js" async defer></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
            // You can also pass an optional settings object
            // below listed default settings
            AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 200, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
        </script>
   
        <script type="module">
            import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'
        
                const swiper = new Swiper('.swiper-container', {
                    // Optional parameters
                    direction: 'horizontal',
                    loop: true,
                    freeMode: true,
                    slidesPerView: 16,
                    autoplay: {
                    delay: 700,
                    disableOnInteraction: false,
                    }


            
                });

        </script>
        
          
       
    </body>
</html>