 <!DOCTYPE html>
 <html class="no-js" lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Ched-Darek - Organic Food</title>
     <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
     <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/animate.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/nice-select.css">
     <link rel="stylesheet" href="assets/css/slick.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/main-color04.css">
 </head>

 <body class="biolife-body">

     <!-- Preloader -->
     <div id="biof-loading">
         <div class="biof-loading-center">
             <div class="biof-loading-center-absolute">
                 <div class="dot dot-one"></div>
                 <div class="dot dot-two"></div>
                 <div class="dot dot-three"></div>
             </div>
         </div>
     </div>

     <!-- HEADER -->
     <header id="header" class="header-area style-01 layout-04">
         <div class="header-top bg-main hidden-xs">
             <div class="container">
                 <div class="top-bar left">
                     <ul class="horizontal-menu">
                         <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>contact@chedDarek.com</a></li>
                         <li><a href="#">Free Shipping for all Order of 50,TND</a></li>



                     </ul>
                 </div>
                 <div class="top-bar right">
                     <ul class="social-list">
                         <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                     </ul>
                     <ul class="horizontal-menu">
                         <li class="horz-menu-item currency">
                             <select name="currency">
                                 <option value="eur"> TND (Dinar)</option>

                             </select>
                         </li>

                         <!-- <li><a href="login.php" class="login-link">
                                        <i class="biolife-icon icon-login"></i>Hello ' .$_SESSION["username"].'</a> </li> -->
                         
                                 <?php if (isset($_SESSION["username"])) {
                                        echo '
                                          <li class="dropdown">
                                          <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="biolife-icon icon-login"></i> Hello '.$_SESSION['username'].'<b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                       
                                          <li class="divider"></li>
                                          <li>
                                              <a href="logout.php" style="color:black;"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                          </li>
                                      </ul>
                                    </li>
                                        ';
                                    } else {
                                        echo '<li><a href="login.php" class="login-link">
                                        <i class="biolife-icon icon-login"></i>Login/Register</a>
                                        ';
                                    }

                                    ?>


                       
                                   

                                 



                        
                     </ul>
                 </div>
             </div>
         </div>
         <div class="header-middle biolife-sticky-object ">
             <div class="container">
                 <div class="row">

                     <style>
                         .logo {
                             text-decoration: none;
                             color: #ff9702;
                             text-transform: uppercase;
                             font-weight: bold;
                             letter-spacing: 3px;
                             font-size: 25px;
                             margin-top: 15px;
                         }
                     </style>
                     <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                         <a href="index.php" class="biolife-logo logo">chedDarek</a>
                     </div>
                     <div class="col-lg-6 col-md-7  hidden-sm hidden-xs">
                         <div class="primary-menu">
                             <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                                 <li class="menu-item"><a href="index.php">Home</a></li>
                                 <li class="menu-item"><a href="shop.php">Shop</a></li>
                                 <li class="menu-item"><a href="Shopping-cart.php">Panier</a></li>
                                 <li class="menu-item"><a href="contact.php">Contact</a></li>
                                 <li class="menu-item"><a href="about-us.php">À propos </a></li>


                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                         <div class="biolife-cart-info">
                             <div class="mobile-search">
                                 <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                                 <div class="mobile-search-content">
                                     <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                         <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                         <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                         <select name="category">
                                             <option value="-1" selected>All Categories</option>
                                             <option value="vegetables">Vegetables</option>
                                             <option value="fresh_berries">Fresh Berries</option>
                                             <option value="ocean_foods">Ocean Foods</option>
                                             <option value="butter_eggs">Butter & Eggs</option>
                                             <option value="fastfood">Fastfood</option>
                                             <option value="fresh_meat">Fresh Meat</option>
                                             <option value="fresh_onion">Fresh Onion</option>
                                             <option value="papaya_crisps">Papaya & Crisps</option>
                                             <option value="oatmeal">Oatmeal</option>
                                         </select>
                                         <button type="submit" class="btn-submit">go</button>
                                     </form>
                                 </div>
                             </div>
                             <!-- <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty">4</span>
                                    </span>
                                </a>
                            </div> -->

                             <?php require_once("templates/front/cart.php"); ?>


                             <div class="mobile-menu-toggle">
                                 <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                     <span></span>
                                     <span></span>
                                     <span></span>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>