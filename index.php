<?php require_once("config/config.php"); ?>

<?php require_once("templates/front/header.php"); ?>

<?php require_once("templates/front/leftSideMenuAndSlider.php"); ?>



<!--Block 04: Product Tab-->
<div class="product-tab z-index-20 sm-margin-top-59px xs-margin-top-20px">
    <div class="container">
        <div class="biolife-title-box slim-item">
            <span class="subtitle">All the best item for You</span>
            <h3 class="main-title">Our Products</h3>
        </div>
        <div class="biolife-tab biolife-tab-contain sm-margin-top-23px">
            <!-- <div class="tab-head tab-head__sample-layout">
                            <ul class="tabs">
                                <li class="tab-element active">
                                    <a href="#tab01_1st" class="tab-link">Featured</a>
                                </li>
                                <li class="tab-element" >
                                    <a href="#tab01_2nd" class="tab-link">Top Rated</a>
                                </li>
                                <li class="tab-element" >
                                    <a href="#tab01_3rd" class="tab-link">On Sale</a>
                                </li>
                            </ul>
                        </div> -->

            <!-- Button trigger modal -->
            

            <div class="tab-content">
                <div id="tab01_1st" class="tab-contain active">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                        <!-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">??</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">??</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->

                        <?php get_product(); ?>






                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>

<?php require_once("templates/front/promotion.php"); ?>






<?php require_once("templates/front/footer.php"); ?>