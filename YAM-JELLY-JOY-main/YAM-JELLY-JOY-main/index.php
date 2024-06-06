<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="landing page\img\logo yamjellyjoy.png" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="landing page\css\styles.css">

        <title>YAM JELLYJOY</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="landing page\img\logo yamjellyjoy.png" alt="logo image">
                    YAM JELLYJOY
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About Us</a>
                        </li>

                        <li class="nav__item">
                            <a href="#reviews" class="nav__link">Reviews</a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#recently" class="nav__link">Recently</a>
                        </li>

                        <li class="nav__item">
                            <a href="login admin.php" class="nav__link">Login as Admin</a>
                        </li>

                    </ul>
                   </li> <!-- Close button -->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>

                    <img src="landing page/assets/bunga 1.png" alt="nav image" class="nav__img-1">
                    <img src="landing page/assets/bunga 2.png" alt="nav image" class="nav__img-2">
                </div>

                <div class="nav__buttons">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i> 

                    <!-- Toggle button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-apps-2-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
              <div class="home__container container grid">
                <img src="landing page/assets/sop jelly ball.png" alt="home image" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        Fresh Soup
                    
                        <div>
                            <img src="landing page/assets/produk bulat.png" alt="home image">
                            Jelly Ball
                        </div>
                    </h1>

                    <p class="home__description">
                        Kelezatan Tanpa Batas, Sensasi Meledak di setiap Gigitan
                    </p>

                    <a href="shop.php" class="button">
                        Order Now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
              </div>

              <img src="landing page/assets/garis.png" alt="home image" class="home__img-garis-1">  
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
            <div class="about__container container">
                <div class="about__data">
                <h2 class="section__title about__title">
                    <div>
                    About Us
                    <img src="landing page/assets/jelly.png" alt="about image">
                    </div>
            </h2>
            <p class="about__description">
                Our team tries their best to provide deliciousness in every bite of Yam Jelly Joy that you eat.
            </p>
        </div>
        <div class="team__photos">
            <div class="team__member box">
                <img src="landing page/assets/adell.jpg" alt="Team Member 1" class="team__photo">
                <p class="team__name">Adelia Langitan</p>
                <p class="team__nim">220211060002</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/nad.jpg" alt="Team Member 2" class="team__photo">
                <p class="team__name">Nadya Tangkere</p>
                <p class="team__nim">220211060020</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/tesa.jpg" alt="Team Member 3" class="team__photo">
                <p class="team__name">Yuliet Sompotan</p>
                <p class="team__nim">220211060048</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/mikel.jpg" alt="Team Member 4" class="team__photo">
                <p class="team__name">Michael Manoppo</p>
                <p class="team__nim">220211060271</p>
            </div>
        </div>
    </div>
</section>
                <img src="landing page/assets/bunga 1.png" alt="about image" class="about">
            </div>

            <img src="landing page/assets/bunga 2.png" alt="about image" class="about__bunga">
            </section>

            <!--==================== REVIEWS ====================-->
            <section class="reviews section" id="reviews">
            <span class="section__subtitle">Best Reviews</span>
            <h2 class="section__title">What our customers says..</h2>

                <div class="reviews__container container grid">
                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Original Yam Jelly Joy</h3>
                        <span class="reviews__description">The original taste. A combination of fruit, jelly and milk</span>

                        <span class="reviews__price">$10.99</span>

                        <button class="reviews__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Extra Creamy Yam Jelly Joy</h3>
                        <span class="reviews__description">Super Creamy because of produced by yogurt mixed with fruit and jelly</span>

                        <span class="reviews__price">$15.99</span>

                        <button class="reviews__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Royal Cheesy Yam Jelly Joy</h3>
                        <span class="reviews__description">The perfect blend of fruit, jelly and savory cream cheese</span>

                        <span class="reviews__price">$19.99</span>

                        <button class="reviews__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== RECENTLY ====================-->
            <section class="recently section" id="recently">
                <div class="recently__container container grid">
                    <div class="recently__data">
                        <span class="section__subtitle">Recently Added</span>
                        <h2 class="section__title">
                            SOUP <br>
                            JELLY BALL
                        </h2>

                        <p class="recently__description">
                        Rasakan kesegaran dan kelezatan di setiap gigitan. 
                        Segera beli dan nikmati sensasi manis dan segar dari Soup Jelly Ball kami!
                        </p>

                        <a href="shop.php" class="button">
                            Order Now <i class="ri-arrow-right-line"></i>
                        </a>

                        <img src="landing page/assets/buah naga.png" alt="recently image" class="recently__data-img">
                    </div>

                    <div class="bottom-data">
                        <div class="orders">
                            <div class="orders__header">
                                <i class='bx bx-receipt'></i>
                                <h3>Recent Orders</h3>
                                <i class='bx bx-filter'></i>
                                <i class='bx bx-search'></i>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Do Kyungsoo</p>
                                        </td>
                                        <td>14-08-2023</td>
                                        <td><span class="status completed">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Sehun</p>
                                        </td>
                                        <td>14-08-2023</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Kai</p>
                                        </td>
                                        <td>14-08-2023</td>
                                        <td><span class="status process">Processing</span></td>
                                    </tr>
                                    <a class="button__recently">
                                     Tersisa ... 
                                    </a>
                                </tbody>
                            </table>
                        </div>
                </div>

                 <img src="landing page/assets/buah apel.png" alt="recently image" class="recently__apel"> 
                 <img src="landing page/assets/buah naga.png" alt="recently image" class="recently__naga"> 
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="landing page/img/logo yamjellyjoy.png" alt="logo image">
                        YAM JELLYJOY
                    </a>

                    <p class="footer__description">
                    Hanya memperhatikan makanan untuk tubuh tidaklah mencukupi. <br>
                    Kita juga memerlukan asupan buah-buahan untuk kesehatan tubuh kita. <br>
                    Mungkin soup buah jelly bisa menjadi pilihan yang sempurna sebagai hidangan penutup anda<br>
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Main Menu</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#about" class="footer__link">About</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Menus</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Address</h3>

                        <ul class="footer__links">
                            <li class="footer__information">
                                Jurusan Teknik Elektro <br>
                                Unsrat, Manado 
                            </li>

                            <li class="footer__information">
                                9AM - 11PM
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Social Media</h3>

                        <ul class="footer__social">
                            <a href="https://www.instagram.com/yam.jellyjoy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </ul>
                    </div>
                </div>

                <img src="landing page/assets/buah naga.png" alt="footer image" class="footer__naga">
                <img src="landing page/assets/buah apel.png" alt="footer image" class="footer__apel">
                <img src="landing page/assets/bunga 2.png" alt="footer image" class="footer__bunga">
            </div>

            <div class="footer__info container">
                <div class="footer__card">
                    <img src="landing page/assets/footer-card-1.png" alt="footer image">
                    <img src="landing page/assets/footer-card-2.png" alt="footer image">
                </div>

                <span class="footer__copy">
                    &copy; YAM JELLYJOY | All rights reserved
                </span>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="landing page\js\scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="landing page\js\main.js"></script>
    </body>
</html></tr>