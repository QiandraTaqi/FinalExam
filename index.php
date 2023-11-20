<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/marquee.css">
        <link rel="stylesheet" href="assets/css/gsap.css">

        <title>DAFT Store | Homepage</title>
    </head>
    <body>

    <?php include_once 'header.php'; ?>

    <?php
if (isset($_SESSION['username'])) {
    include_once('cart.php');
} ?>

        

        <!--==================== MAIN ====================-->
            <!--==================== HOME ====================-->
            <div class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="assets/img/logo.png" alt="" class="home__img floating__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title move-text parallax-two" id="home-txt">THE STORE <br> THAT SELLING SIMPLICITY.</h1>
                        <p class="home__description">
                        Welcome to the DAFT Furniture Store. A very user-friendly online furniture store. easy to buy. fast to enjoy.
                        </p>

                        <div class="home__btns">

                            <br>
                            <button onclick="location.href='about.php';" class="button home__button">Discover More →</button>
                        </div>
                    </div>
                </div>
            </div>
<br>

            <!--==================== ABOUT ====================-->
            <div class="about section container">
                <div class="about__title">
                    <h2>Our Product</h2>
                </div>
                <div class="about__card card-1">
                    <div class="about__content">
                        <h2 class="about__text">Table</h2>
                        <button onclick="location.href='catalog.php';" class="button about__btn">See Catalog</button>
                    </div>
                </div>
                <div class="about__card card-2">
                    <div class="about__content">
                        <h2 class="about__text">Chair</h2>
                        <button onclick="location.href='catalog.php';" class="button about__btn">See Catalog</button>
                    </div>
                </div>
                <div class="about__card card-3">
                    <div class="about__content">
                        <h2 class="about__text">Couch</h2>
                        <button onclick="location.href='catalog.php';" class="button about__btn">See Catalog</button>
                    </div>
                </div>
            </div>

                <br><br><br><br><br><br><br><br><br><br><br><br>

            <!--==================== STORY ====================-->
            <div class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            soo...?
                        </h2>
    
                        <h1 class="story__title">
                        INTERESTED IN <br> OUR PRODUCTS?
                        </h1>
    
                        <p class="story__description">
                        Please choose the type of a furniture according to your needs and tastes, here, only at DAFT Store!
                        </p>
    
                        <button onclick="location.href='catalog.php';" class="button home__button">See Catalog Now! →</button>
                    </div>

                    <div class="story__images">
                        <img src="assets/img/room.jpg" alt="" class="story__img">
                    </div>
                </div>
            </div>
                
                       
            

        </main>
        <br><br>
        
<?php include_once 'footer.php'; ?>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/gsap.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
        <script src="https://unpkg.com/split-type"></script>



        <script>
     

        </script>
    </body>
</html>