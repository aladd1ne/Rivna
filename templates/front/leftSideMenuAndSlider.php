<?php require_once("config/config.php");?>
    
    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Vertical Menu And Main Slide-->
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <div class="biolife-vertical-menu none-box-shadow  ">
                            <div class="vertical-menu vertical-category-block always ">
                                <div class="block-title">
                                    <span class="menu-icon">
                                        <span class="line-1"></span>
                                        <span class="line-2"></span>
                                        <span class="line-3"></span>
                                    </span>
                                    <span class="menu-title">All departments</span>
                                    <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                                <div class="wrap-menu">
                                    <ul class="menu clone-main-menu">

                                    <?php get_categories(); ?>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12">
                        <div class="main-slide block-slider nav-change hover-main-color type02">
                            <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version first-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">Pomegranate</i>
                                            <h3 class="second-line">Vegetables 100% Organic</h3>
                                            <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                            <p class="buttons">
                                                <a href="#" class="btn btn-bold">Shop now</a>
                                                <a href="#" class="btn btn-thin">View lookbook</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version second-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">Pomegranate</i>
                                            <h3 class="second-line">Vegetables 100% Organic</h3>
                                            <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                            <p class="buttons">
                                                <a href="#" class="btn btn-bold">Shop now</a>
                                                <a href="#" class="btn btn-thin">View lookbook</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version third-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">Pomegranate</i>
                                            <h3 class="second-line">Vegetables 100% Organic</h3>
                                            <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                            <p class="buttons">
                                                <a href="#" class="btn btn-bold">Shop now</a>
                                                <a href="#" class="btn btn-thin">View lookbook</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!--Block 02: Banners-->
            <div class="banner-block sm-margin-bottom-57px xs-margin-top-80px sm-margin-top-30px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-banner biolife-banner__style-08">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style08.png" width="193" height="185" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">Sumer Fruit</span>
                                        <b class="text2">100% Pure Natural Fruit Juice</b>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-banner biolife-banner__style-09">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style09.png" width="191" height="185" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">California</span>
                                        <b class="text2">Fresh Fruit</b>
                                        <span class="text3">Association</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-banner biolife-banner__style-10">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style10.png" width="185" height="185" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">Naturally fresh taste</span>
                                        <p class="text2">With <span>25% Off</span> All Teas</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 03: Categories-->
            <div class="wrap-category xs-margin-top-80px">
                <div class="container">
                    <div class="biolife-title-box style-02 xs-margin-bottom-33px">
                        <span class="subtitle">Hot Categories 2019</span>
                        <h3 class="main-title">Featured Categories</h3>
                        <p class="desc">Natural food is taken from the world's most modern farms with strict safety cycles</p>
                    </div>
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Fresh Fruit</h4>
                                    <span class="cat-number">(20 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Drink Fruits</h4>
                                    <span class="cat-number">(220 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">vegetables</h4>
                                    <span class="cat-number">(350 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Dried Fruits</h4>
                                    <span class="cat-number">(520 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Fresh Fruit</h4>
                                    <span class="cat-number">(20 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Drink Fruits</h4>
                                    <span class="cat-number">(220 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">vegetables</h4>
                                    <span class="cat-number">(350 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Dried Fruits</h4>
                                    <span class="cat-number">(520 items)</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="biolife-service type01 biolife-service__type01 xs-margin-top-60px sm-margin-top-45px">
                        <ul class="services-list">
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">1</span>
                                    <span class="biolife-icon icon-beer"></span>
                                    <a class="srv-name" href="#">full stamped product</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">2</span>
                                    <span class="biolife-icon icon-schedule"></span>
                                    <a class="srv-name" href="#">place and delivery on time</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">3</span>
                                    <span class="biolife-icon icon-car"></span>
                                    <a class="srv-name" href="#">Free shipping in the city</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
