<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem pendukung keputusan Penilaian Skripsi menggunakan metode ID3 </title>
        <link rel="stylesheet" href="../protend/landingpage/app/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../protend/landingpage/app/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="../protend/landingpage/app/dist/app.css">
        <link rel="stylesheet" href="../protend/landingpage/assets/font/font-awesome.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="../protend/landingpage/assets/images/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../protend/landingpage/assets/images/favicon.png">
        <link rel="stylesheet" href="../protend/landingpage/assets/style.css">
    </head>
<body class="header-fixed main home1 counter-scroll btn-effect1">
        <!-- preloade -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
          </div>
        <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
    <header id="header_main" class="header">
        <div class="container">
            <div id="site-header-inner">
                <div class="header__logo">
                    <a href="index.php"><img src="../protend/landingpage/assets/images/logo/logo.png" alt=""></a>
                </div>
                <a href="#" class="header-contact">
                    <div class="icon">
                        <span class="icon-Icon"></span>
                    </div>
                    <div class="desc">
                        <span>Phone:</span>  +012 (345) 6789
                    </div>
                </a>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item current-item"><a href="index.html">Home 1</a></li>
                                <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">About</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="about.html">About</a></li>
                                <li class="menu-item"><a href="team.html">OurTeam</a></li>
                                <li class="menu-item"><a href="team-details.html">Team Details</a></li>
                                <li class="menu-item"><a href="service.html">Service</a></li>
                                <li class="menu-item"><a href="service-details.html">Service Details</a></li>
                                <li class="menu-item"><a href="history.html">history</a></li>
                                <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                <li class="menu-item"><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="porfolio.html">porfolio</a></li>
                                <li class="menu-item"><a href="porfolio-details.html">porfolio details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Product</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="product.html">Product</a></li>
                                <li class="menu-item"><a href="product-details.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">News</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blog-standard.html">blog standard</a></li>
                                <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="contact.html">contact Us</a>
                        </li>
                    </ul>
                </nav><!-- /#main-nav -->
                <div class="header-right">
                    <div class="header-search flat-show-search" id="s1">
                        <a href="#" class="show-search header-search-trigger">
                            <span class="icon-Vector"></span>
                        </a>
                        <div class="top-search">
                            <form action="#" method="get" role="search" class="search-form">
                                <input type="search" id="s" class="search-field" placeholder="Search..." value="" name="s" title="Search for" required="">
                                <button class="search search-submit" type="submit" title="Search">
                                    <i class="icon-Vector"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <a class="tf-button" href="index_mahasiswa.php">                          
                        <span>Login</span>
                    </a>
                </div>
                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
            </div>
        </div>
    </header>
    <!-- end Header -->

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container slider-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <p class="sub-title">We’re the best</p>
                                        <h1 class="title">SCRIPTION DECISION SUPPORT SYSTEM USING METHOD ID3</h1>
                                        <p class="desc">Aenean congue mi nulla, eget feugiat nibh fringilla a. Sed consequat</p>
                                        <div class="btn-slider">
                                            <a class="tf-button" href="service.html">                          
                                                <span>View services</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <div class="img">
                                            <img src="../protend/landingpage/assets/images/common/imgslider.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <p class="sub-title">We’re the best</p>
                                        <h1 class="title">SCRIPTION DECISION SUPPORT SYSTEM USING METHOD ID3</h1>
                                        <p class="desc">Aenean congue mi nulla, eget feugiat nibh fringilla a. Sed consequat</p>
                                        <div class="btn-slider">
                                            <a class="tf-button" href="service.html">                          
                                                <span>View services</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <div class="img">
                                            <img src="../protend/landingpage/assets/images/common/data.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <p class="sub-title">We’re the best</p>
                                        <h1 class="title">SCRIPTION DECISION SUPPORT SYSTEM USING METHOD ID3</h1>
                                        <p class="desc">Aenean congue mi nulla, eget feugiat nibh fringilla a. Sed consequat</p>
                                        <div class="btn-slider">
                                            <a class="tf-button" href="service.html">                          
                                                <span>View services</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <div class="img">
                                            <img src="../protend/landingpage/assets/images/common/data.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-service pb0 mobie-pb0 tf-animated-fadeup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section pb25 mb68">
                        <p class="sub-title">Popular Services</p>
                        <h2 class="title">We provide the Best IT solution services</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 animated-effect">
                    <div class="icon-box st1 ecffect">
                        <div class="overlay"></div>
                        <div class="icon">
                            <span class="icon-Page-1_50"></span>
                        </div>
                        <h5 class="title"><a href="service-details.html">Data Recovery Analysis</a></h5>
                        <p>Aenean eleifend ultricies viverra Quisque</p>
                        <a href="service-details.html" class="readmore"><span>Read More</span></a>
                    </div>
                </div>      
                <div class="col-xl-3 col-lg-3 col-md-6 animated-effect">
                    <div class="icon-box st1 ecffect">
                        <div class="overlay"></div>
                        <div class="icon">
                            <span class="icon-coding"></span>
                        </div>
                        <h5 class="title"><a href="service-details.html">Website
                            Develoment</a></h5>
                        <p>Aenean eleifend ultricies viverra Quisque</p>
                        <a href="service-details.html" class="readmore"><span>Read More</span></a>
                    </div>
                </div>   
                <div class="col-xl-3 col-lg-3 col-md-6 animated-effect">
                    <div class="icon-box st1 ecffect">
                        <div class="overlay"></div>
                        <div class="icon">
                            <span class="icon-app"></span>
                        </div>
                        <h5 class="title"><a href="service-details.html">Mobile app
                            Developemnt</a></h5>
                        <p>Aenean eleifend ultricies viverra Quisque</p>
                        <a href="service-details.html" class="readmore"><span>Read More</span></a>
                    </div>
                </div>   
                <div class="col-xl-3 col-lg-3 col-md-6 animated-effect">
                    <div class="icon-box st1 ecffect mobie-bt0">
                        <div class="overlay"></div>
                        <div class="icon">
                            <span class="icon-cloud"></span>
                        </div>
                        <h5 class="title"><a href="service-details.html">Mobile app
                            Developemnt</a></h5>
                        <p>Aenean eleifend ultricies viverra Quisque</p>
                        <a href="service-details.html" class="readmore"><span>Read More</span></a>
                    </div>
                </div>   
            </div>
        </div>
    </section>

    <section class="tf-section tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-about pb52 pr70 txt-r tf-animated-fadeup tf-animated-fadeleft">
                        <img src="../protend/landingpage/assets/images/common/imgabout1.jpg" alt="" class="effect-img-about">
                        <div class="experience-box">
                            <div class="box-couter counter">
                                <div class="number-content">
                                    <span class="count-number" data-to="32" data-speed="2000" data-inviewport="yes">32</span>+
                                </div>
                            </div>
                            <h5>Years Experience In
                                Our Company</h5>
                            <p>Aenean eleifend ultricies viverra. Quisque lorem orci, luctus </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tf-animated-fadeup">
                    <div class="content-about">
                        <div class="title-section style2 mb29">
                            <p class="sub-title">About Company</p>
                            <h2 class="title">The world’s networking Company.</h2>
                        </div>
                        <p class="txt-transform">Mauris id lacus et lectus sodales accumsan vel sit amet lacus. Nulla facilisi. 
                            Curabitur scelerisque nec nibh quis ultrices. Vivamus eu lectus pretium, maximus massa
                        </p>
                        <p class="txt-transform">Aenean eleifend ultricies viverra. Quisque lorem orci, luctus ut faucibus vel, tempus varius elit. Etiam</p>
                        <div class="wrap-icon-box">
                            <div class="icon-box st2">
                                <div class="img">
                                    <img src="../protend/landingpage/assets/images/common/icon1.png" alt="">
                                </div>
                                <div class="desc"><a href="about.html">Technical consultant</a></div>
                            </div>
                            <div class="icon-box st2">
                                <div class="img style">
                                    <img src="assets/images/common/icon2.png" alt="">
                                </div>
                                <div class="desc"><a href="about.html">Technology Specialist</a></div>
                            </div>
                        </div>
                        <div class="wrap">
                            <a href="about.html" class="tf-button"><span>Read More</span></a>
                            <div class="img-box">
                                <div class="img">
                                    <img src="../protend/landingpage/assets/images/common/Imagebox1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="name">
                                        michele morrone
                                    </div>
                                    <p class="desc">Founder CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-project bg-st1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12  position-relative tf-animated-fadeup">
                    <div class="title-section style2 mb29">
                        <p class="sub-title">Latest Project</p>
                        <h2 class="title txt-transform">check We have solution done IT project</h2>
                    </div>
                    <p class="txt-transform pr15 mb52 animated-effect">Pellentesque viverra eget velit a tincidunt. Sed mattis enim nisl, sit amet malesuada sapien pulvinar ut.</p>
                    <div class="btn-slider-project animated-effect">
                        <div class="prev-project">
                            <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.98743" height="9.93716" transform="matrix(-0.709782 -0.704421 -0.709782 0.704421 8.46387 1.40015)" fill="url(#paint0_linear_1666_10595)"/>
                            <rect width="1.98743" height="9.93716" transform="matrix(-0.709782 0.704421 0.709782 0.704421 1.41064 5.6001)" fill="url(#paint1_linear_1666_10595)"/>
                            <rect width="14.9621" height="1.97988" transform="matrix(-1 0 0 1 16.0303 6.01001)" fill="url(#paint2_linear_1666_10595)"/>
                            <rect width="1.99495" height="1.97988" transform="matrix(-1 0 0 1 20.02 6.01001)" fill="url(#paint3_linear_1666_10595)"/>
                            <rect width="1.99495" height="1.97988" transform="matrix(-1 0 0 1 24.0103 6.01001)" fill="url(#paint4_linear_1666_10595)"/>
                            <rect width="1.99495" height="1.97988" transform="matrix(-1 0 0 1 28 6.01001)" fill="url(#paint5_linear_1666_10595)"/>
                            <defs>
                            <linearGradient id="paint0_linear_1666_10595" x1="2.98115" y1="4.96858" x2="-0.0457025" y2="5.23731" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1666_10595" x1="2.98115" y1="4.96858" x2="-0.0457025" y2="5.23731" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_1666_10595" x1="22.4432" y1="0.989942" x2="20.5689" y2="7.27758" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear_1666_10595" x1="2.99243" y1="0.989942" x2="0.44068" y2="2.13129" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            <linearGradient id="paint4_linear_1666_10595" x1="2.99243" y1="0.989942" x2="0.44068" y2="2.13129" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            <linearGradient id="paint5_linear_1666_10595" x1="2.99243" y1="0.989942" x2="0.44068" y2="2.13129" gradientUnits="userSpaceOnUse">
                            <stop offset="1" stop-color="#CF00FE"/>
                            <stop offset="1" stop-color="#005DE0"/>
                            </linearGradient>
                            </defs>
                            </svg>
                        </div>
                        <div class="next-project">
                            <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="1.98743" height="9.93716" transform="matrix(0.709782 -0.704421 0.709782 0.704421 19.5361 1.40015)" fill="white"/>
                                <rect width="1.98743" height="9.93716" transform="matrix(0.709782 0.704421 -0.709782 0.704421 26.5894 5.6001)" fill="white"/>
                                <rect x="11.9697" y="6.01001" width="14.9621" height="1.97988" fill="white"/>
                                <rect x="7.97998" y="6.01001" width="1.99495" height="1.97988" fill="white"/>
                                <rect x="3.98975" y="6.01001" width="1.99495" height="1.97988" fill="white"/>
                                <rect y="6.01001" width="1.99495" height="1.97988" fill="white"/>
                                </svg>
                        </div>
                    </div>
                    <div class="icon-absolute animated-effect">
                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.79163 38.903C5.84025 39.5238 9.67733 40.924 13.6754 41.6721C14.9162 41.9042 15.9651 40.4468 14.9645 39.4571C14.059 38.5612 13.0137 37.8138 11.8967 37.1697C26.2502 31.0503 38.5835 16.8592 40.0929 1.31547C40.188 0.337537 38.8382 0.353644 38.5257 1.1032C32.5812 15.3682 23.3589 26.2748 9.34573 32.2229C9.91814 31.073 10.3734 29.8513 10.667 28.5447C11.3477 25.5113 6.67764 24.2164 6.00202 27.2586C5.33445 30.2626 3.78263 32.758 1.21701 34.503C-0.296004 35.5315 -0.433616 38.5612 1.79163 38.903Z" fill="url(#paint0_linear_2046_3375)"/>
                        <defs>
                        <linearGradient id="paint0_linear_2046_3375" x1="-19.9023" y1="21.1281" x2="31.855" y2="-1.21192" gradientUnits="userSpaceOnUse">
                        <stop offset="1" stop-color="#CF00FE"/>
                        <stop offset="1" stop-color="#005DE0"/>
                        </linearGradient>
                        </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 tf-animated-fadeup">
                    <div class="swiper-container slider-project animated-effect">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/img1project.jpg" alt="">
                                        <div class="overlay-effect"></div>
                                    </div>
                                    <div class="hover-effect">
                                        <div class="content-box">
                                            <p>IT Technology Solution</p>
                                            <h4><a href="porfolio.html">Data Recovery analysis</a></h4>
                                            <a href="porfolio.html" class="btn">
                                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 -0.704421 0.709782 0.704421 19.5361 1.40015)" fill="white"></rect>
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 0.704421 -0.709782 0.704421 26.5894 5.6001)" fill="white"></rect>
                                                    <rect x="11.9697" y="6.01001" width="14.9621" height="1.97988" fill="white"></rect>
                                                    <rect x="7.97998" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect x="3.98975" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/img2project.jpg" alt="">
                                        <div class="overlay-effect"></div>
                                    </div>
                                    <div class="hover-effect">
                                        <div class="content-box">
                                            <p>IT Technology Solution</p>
                                            <h4><a href="porfolio.html">Data Recovery analysis</a></h4>
                                            <a href="porfolio.html" class="btn">
                                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 -0.704421 0.709782 0.704421 19.5361 1.40015)" fill="white"></rect>
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 0.704421 -0.709782 0.704421 26.5894 5.6001)" fill="white"></rect>
                                                    <rect x="11.9697" y="6.01001" width="14.9621" height="1.97988" fill="white"></rect>
                                                    <rect x="7.97998" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect x="3.98975" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/img3project.jpg" alt="">
                                        <div class="overlay-effect"></div>
                                    </div>
                                    <div class="hover-effect">
                                        <div class="content-box">
                                            <p>IT Technology Solution</p>
                                            <h4><a href="porfolio.html">Data Recovery analysis</a></h4>
                                            <a href="porfolio.html" class="btn">
                                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 -0.704421 0.709782 0.704421 19.5361 1.40015)" fill="white"></rect>
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 0.704421 -0.709782 0.704421 26.5894 5.6001)" fill="white"></rect>
                                                    <rect x="11.9697" y="6.01001" width="14.9621" height="1.97988" fill="white"></rect>
                                                    <rect x="7.97998" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect x="3.98975" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/img1project.jpg" alt="">
                                        <div class="overlay-effect"></div>
                                    </div>
                                    <div class="hover-effect">
                                        <div class="content-box">
                                            <p>IT Technology Solution</p>
                                            <h4><a href="porfolio.html">Data Recovery analysis</a></h4>
                                            <a href="porfolio.html" class="btn">
                                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 -0.704421 0.709782 0.704421 19.5361 1.40015)" fill="white"></rect>
                                                    <rect width="1.98743" height="9.93716" transform="matrix(0.709782 0.704421 -0.709782 0.704421 26.5894 5.6001)" fill="white"></rect>
                                                    <rect x="11.9697" y="6.01001" width="14.9621" height="1.97988" fill="white"></rect>
                                                    <rect x="7.97998" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect x="3.98975" y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                    <rect y="6.01001" width="1.99495" height="1.97988" fill="white"></rect>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-team pb0 mobie-pb0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tf-animated-fadeup">
                    <div class="title-section pb25 mb39">
                        <p class="sub-title">Our Team</p>
                        <h2 class="title">We provide the Best IT
                            Solution services</h2>
                    </div>
                </div>
                <div class="col-md-12 tf-animated-fadeup">
                    <div class="swiper-container slider-team animated-effect">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/team1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><a href="team-details.html">Al Mahmud</a></h5>
                                        <p class="desc">UI- Designer</p>
                                        <ul class="social">
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box active">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/team2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><a href="team-details.html">Michelle Williams</a></h5>
                                        <p class="desc">Senior Developer</p>
                                        <ul class="social">
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/team3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><a href="team-details.html">Michelle Pfeiffer</a></h5>
                                        <p class="desc">UI- Designer</p>
                                        <ul class="social">
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/team4.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><a href="team-details.html">Michelle monaghan</a></h5>
                                        <p class="desc">UI- Designer</p>
                                        <ul class="social">
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section technology-solution">
        <div class="container position-relative">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 tf-animated-fadeleft">
                    <div class="image-about image-video style2 mr-12 animated-effect">
                        <img src="../protend/landingpage/assets/images/common/imgabout2.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=7vQznLKEfBs" class="popup-youtube"><div class="play"><i class="fas fa-play"></i></div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 tf-animated-fadeup">
                    <div class="content-about animated-effect">
                        <div class="title-section style2 mb29">
                            <p class="sub-title">Technology Solution</p>
                            <h2 class="title">We solve problems with technology</h2>
                        </div>
                        <p class="txt">Aliquam in varius erat. Nulla in massa ligula. Proin posuere nibh eget facilisis vestibulum.</p>
                        <p class="txt">Fusce nunc urna, scelerisque non egestas nec, auctor maximus dolor. Nam iaculis justo </p>
                        <a href="../index_mahasiswa.php" class="tf-button"><span>Login</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-testimonior">
        <div class="overlay"></div>
        <div class="overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12 tf-animated-fadeup">
                    <div class="testimonior-content animated-effect">
                        <div class="title-section style2 mb29">
                            <p class="sub-title">TESTIMONIAL</p>
                            <h2 class="title white">Clients Feedback
                                Examples You</h2>
                        </div>
                        <p class="txt-transform pr65">Pellentesque gravida lectus vitae nisi luctus, finibus aliquet ligula ultrices.</p>
                        <div class="wrap-img mt40">
                            <div class="swiper-container slider-testimonior-thum">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image"><img src="../protend/landingpage/assets/images/common/imgtestimonior1.jpg" alt=""></div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image"><img src="../protend/landingpage/assets/images/common/imgtestimonior2.jpg" alt=""></div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image"><img src="../protend/landingpage/assets/images/common/imgtestimonior3.jpg" alt=""></div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image"><img src="../protend/landingpage/assets/images/common/imgtestimonior4.jpg" alt=""></div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image style"><img src="../protend/landingpage/assets/images/common/imgtestimonior5.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image style"><a href="#" class="nolink"><i class="far fa-plus"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 tf-animated-fadeup position-relative">
                    <div class="swiper-container slider-testimonior animated-effect">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/imgtestimonior6.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="../protend/landingpage/assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/post/post7.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="../protend/landingpage/assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/imgtestimonior6.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="../protend/landingpage/assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/post/post7.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="../protend/landingpage/assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/common/imgtestimonior6.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonior-box">
                                    <div class="image">
                                        <img src="../protend/landingpage/assets/images/post/post7.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Proin tortor mauris, consectetur sit amet faucibus mattis, pretium ac felis. Vestibulum</p>
                                        <h4>Al Mahmud</h4>
                                        <p class="desc">
                                            UI- Designer
                                        </p>
                                        <img class="quote" src="assets/images/common/quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-absolute">
                        <svg width="58" height="46" viewBox="0 0 58 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M57.854 0.0619237C51.4982 36.1389 3.75201 40.4904 2.15014 41.047C1.94345 41.0976 1.99511 42.1602 2.2018 42.2108C17.3421 46.2587 56.9239 25.918 57.9574 0.264332C57.9574 0.213733 57.9056 -0.140472 57.854 0.0619237Z" fill="#00B0FC"/>
                            <path d="M11.7777 44.0562C8.36721 41.9311 4.18164 41.7287 0.254469 41.6781C0.254469 42.5889 0.306129 43.4997 0.306129 44.4104C5.68016 42.3359 8.16052 36.6688 8.93562 33.5317C9.03896 33.0763 9.09064 32.2667 8.93562 31.8113C8.88394 31.7101 8.67721 30.9511 8.57387 31.5077C7.59207 35.252 2.83812 40.5649 0.306129 41.7287C-0.158931 41.9311 -0.0555968 44.461 0.35779 44.461C4.28497 44.2586 7.90215 44.7646 11.7777 45.0176C11.9327 44.967 11.881 44.1068 11.7777 44.0562Z" fill="#00B0FC"/>
                        </svg>
                    </div>
                    <div class="testimonior-pagination">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-blog pb0 mobie-pb0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tf-animated-fadeup">
                    <div class="title-section pb25 mb68">
                        <p class="sub-title">Blog & News</p>
                        <h2 class="title">Every single day update
                            For Technology</h2>
                    </div>
                </div>
                <div class="col-md-4 tf-animated-fadeup">
                    <div class="blog-post animated-effect">
                        <div class="image">
                            <img src="../protend/landingpage/assets/images/post/post8.jpg" alt="">
                            <div class="date"><span>20 Feb, 2022</span></div>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><a href="blog-details.html">By Admin</a></li>      
                                <li><a href="blog-details.html">3 Comments</a></li>  
                            </ul>
                            <h4 class="title">
                                <a href="blog-details.html">Software is our business and business is good</a>
                            </h4>
                            <p>Pellentesque viverra eget velit a tincidunt Sed mattis</p>
                            <a href="blog-details.html" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 tf-animated-fadeup">
                    <div class="blog-post animated-effect">
                        <div class="image">
                            <img src="../protend/landingpage/assets/images/post/post9.jpg" alt="">
                            <div class="date"><span>20 Feb, 2022</span></div>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><a href="blog-details.html">By Admin</a></li>      
                                <li><a href="blog-details.html">3 Comments</a></li>  
                            </ul>
                            <h4 class="title">
                                <a href="blog-details.html">Software is our business and business is good</a>
                            </h4>
                            <p>Pellentesque viverra eget velit a tincidunt Sed mattis</p>
                            <a href="blog-details.html" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 tf-animated-fadeup">
                    <div class="blog-post mobie-bt0 animated-effect">
                        <div class="image">
                            <img src="../protend/landingpage/assets/images/post/post10.jpg" alt="">
                            <div class="date"><span>20 Feb, 2022</span></div>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><a href="blog-details.html">By Admin</a></li>      
                                <li><a href="blog-details.html">3 Comments</a></li>  
                            </ul>
                            <h4 class="title">
                                <a href="blog-details.html">Software is our business and business is good</a>
                            </h4>
                            <p>Pellentesque viverra eget velit a tincidunt Sed mattis</p>
                            <a href="blog-details.html" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tf-animated-fadeup">
                    <div class="swiper-container sl-partner item-parner animated-effect">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="../protend/landingpage/assets/images/common/partner1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section get-solution">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 tf-animated-fadeup">
                    <div class="title-section">
                        <h2 class="title">Solve your IT needs today!</h2>
                        <p>Aliquam in varius erat. Nulla in massa ligula. Proin posuere</p>
                        <a href="../index_dosen.php" class="tf-button"><span>Login</span></a>
                    </div>
                </div>
                <div class="col-md-6 tf-animated-fadeup">
                    <div class="image animated-effect">
                        <img src="../protend/landingpage/assets/images/common/img-solution.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="style2">
        <div class="footer-main">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="widget widget-logo">
                        <div class="footer__logo style2">
                            <a href="index.html">
                                <img src="../protend/landingpage/assets/images/logo/logo3.png" alt="">
                            </a>
                        </div>
                        <p class="desc">Pellentesque viverra eget velit a tincidunt. Sed mattis enim nisl, sit amet malesuada sapien</p>
                        <form action="#" id="subscribe-form">
                            <input type="text" placeholder="Email Address" name="mail" id="subscribe-email" required>
                            <button type="submit" id="subscribe-button">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2075_4097)">
                                    <path d="M16.4453 20C16.5209 20 16.597 19.9857 16.6696 19.9553C16.8888 19.865 17.0312 19.6509 17.0312 19.4141V0.585919C17.0312 0.349044 16.8888 0.135021 16.6696 0.0446301C16.4499 -0.0463465 16.1987 0.00459099 16.031 0.171661L3.1404 13.1014C2.97275 13.269 2.9224 13.5208 3.01337 13.74C3.10376 13.9591 3.31779 14.1016 3.55466 14.1016H10.3433L16.031 19.8284C16.1432 19.9405 16.2931 20 16.4453 20Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2075_4097">
                                    <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <div class="widget widget-service">
                        <h5 class="widget-title">
                            Our Services
                        </h5>
                        <ul class="widget-link">
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Service</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="porfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-recent-posts">
                        <h5 class="widget-title">
                            Popular Post
                        </h5>
                        <ul class="recent-posts style">
                            <li>
                                <img src="../protend/landingpage/assets/images/post/thump4.jpg" alt="">
                                <ul class="content">
                                    <li><a href="blog-details.html">The future is bright,
                                        the future is IT</a></li>
                                    <li class="meta-post">
                                        <a href="blog-details.html">20 Th Oct 2021</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="recent-posts">
                            <li>
                                <img src="../protend/landingpage/assets/images/post/thump5.jpg" alt="">
                                <ul class="content">
                                    <li><a href="blog-details.html">The future is bright,
                                        the future is IT</a></li>
                                    <li class="meta-post">
                                        <a href="blog-details.html">20 Th Oct 2021</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-infomation">
                        <h5 class="widget-title">
                            Contact Info
                        </h5>
                        <ul class="infomation">
                            <li>
                                <span>Phone :</span>+1 246-345-069
                            </li>
                            <li class="style">
                                <span>Email :</span>Monol@gmail.com
                            </li>
                            <li>
                                <span>Address :</span>90 Stanmer St, London
                                SW11 3DE, UK
                            </li>
                        </ul>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>                           
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="wrap-fx">
                                <div class="Copyright">
                                    <span>© 2022.  <a href="#">monal</a> All rights reserved.</span>
                                </div>
                                <ul class="list">
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="service.html">Service</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">Faq</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    </div>
    <a id="scroll-top"></a>
    <script src="../protend/landingpage/app/js/jquery.min.js"></script>
    <script src="../protend/landingpage/app/js/app.js"></script>
    <script src="../protend/landingpage/app/js/jquery.easing.js"></script>
    <script src="../protend/landingpage/app/js/jquery.magnific-popup.min.js"></script>
    <script src="../protend/landingpage/app/js/swiper-bundle.min.js"></script>
    <script src="../protend/landingpage/app/js/swiper.js"></script>
    <script src="../protend/landingpage/app/js/animated.js"></script>
    <script src="../protend/landingpage/app/js/countto.js"></script>
    <script src="../protend/landingpage/app/js/plugin.js"></script>
</body>
</html>