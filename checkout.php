<?php require_once("config/config.php"); ?>

<?php require_once("templates/front/header.php"); ?>

<?php

if (empty($_SESSION["shopping_cart"])) {
    $referer = $_SERVER['HTTP_REFERER'];
    if (isset($referer)) {
        header("location: $referer");
    } else {
        redirect("index.php");
    }
}

?>

<style>
    .inp {
        margin-bottom: 5px;
    }
</style>
<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">Checkout</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>
            <li class="nav-item"><a href="shopping-cart.php" class="permal-link">Votre Panier</a></li>
            <li class="nav-item"><span class="current-page">Checkout</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain checkout">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container sm-margin-top-37px">
            <div class="row">

                <!--checkout progress box-->
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="checkout-progress-wrap">
                        <ul class="steps">
                            <li class="step 1st">
                                <div class="checkout-act active">
                                    <h3 class="title-box"><span class="number"><i class="fa fa-credit-card" aria-hidden="true"></i></span>Checkout</h3>
                                    <div class="box-content">
                                        <p class="txt-desc">Checking out as a <a class="pmlink" href="#">Guest?</a> You’ll be able to save your details to create an account with us later.</p>
                                        <div class="login-on-checkout">
                                            <form action="#" name="frm-login" method="post">

                                                <?php
                                                if (isset($_POST['submit'])) {

                                                    $total_price = 0;
                                                    $total_item = 0;
                                                    $order_total;

                                                    ///////POST VARIABLES///////
                                                    $client_name     = $_POST['client_name'];
                                                    $client_lst_name = $_POST['client_lst_name'];
                                                    $client_number   = $_POST['client_number'];
                                                    $order_address   = $_POST['order_address'];
                                                    $order_total     = $_SESSION["order_total"];

                                                    $send_order = query("INSERT INTO orders (order_total,order_address,client_name,client_lst_name,client_number) VALUES('{$order_total}','{$order_address}',
                                                                         '{$client_name}','{$client_lst_name}','{$client_number}' )");

                                                    $last_id = last_id();
                                                    confirm($send_order);
                                                    ///////END OF POST VARIABLES///////

                                                    if (!empty($_SESSION["shopping_cart"])) {
                                                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {

                                                            $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
                                                            $total_item = $total_item + 1;
                                                            $total = number_format($total_price, 2);

                                                            $id = $values["product_id"];
                                                            $product_name = $values["product_name"];
                                                            $product_price = $values["product_price"];
                                                            $product_quantity = $values["product_quantity"];

                                                            $insert_report = query("INSERT INTO order_items (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_name}','{$product_price}','{$product_quantity}')");
                                                            confirm($insert_report);
                                                        }

                                                        unset($_SESSION["shopping_cart"]);
                                                        unset($_SESSION["order_total"]);
                                                        // session_destroy();

                                                        header("Location: index.php");
                                                    }
                                                }

                                                ?>
                                                <style>
                                                    .checkouts {
                                                        width: 100%;
                                                        background-color: #ff9702;
                                                        font-weight: bold;
                                                        border-radius: 3px;
                                                        color: #fff;
                                                        text-transform: uppercase;
                                                        padding: 10px;

                                                    }
                                                </style>

                                                <?php if (isset($_SESSION["username"])) {



                                                    echo '
                                                        <div class="form-row">

                                                        <div class="col">
                                                            <label for="inputEmail4">Nom</label>
                                                            <input type="text" name="client_name" value="' . $_SESSION["username"] . '" class="form-control inp" placeholder="First name" required autofocus>
                                                        </div>
                                                        <label for="inputEmail4">Prénom</label>
                                                        <div class="col">
                                                            <input type="text" name="client_lst_name" value="' . $_SESSION['user_lastname'] . '" class="form-control inp" placeholder="Last name" required autofocus>
                                                        </div>
    
                                                        <label for="inputEmail4">Numero Tél</label>
                                                        <div class="col">
                                                            <input type="text" name="client_number" value="' . $_SESSION['user_contact'] . '" class="form-control inp" placeholder="Last name" required autofocus>
                                                        </div>

                                                        <label for="inputEmail4">Address</label>
                                                        <div class="col">
                                                            <input type="text" name="order_address" value="' . $_SESSION['user_address'] . '" class="form-control inp" placeholder="Last name" required autofocus>
                                                        </div>
    
                                                    </div>
                                                    <div class="buttons">
                                                    <input type="submit" name="submit" class="btn add-to-cart-btn checkouts  " value="Checkout" />
                                                </div>
                                                        ';
                                                } else {
                                                    echo '
                                                    Vous devez vous  <a href ="login-checkout.php">Connecter</a> pour passer à la caisse.
                                                    ';
                                                }

                                                ?>





                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!--Order Summary-->
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        <div class="title-block">
                            <h3 class="title">Votre Commande</h3>

                        </div>
                        <div class="cart-list-box short-type">

                            <span class="icon-qty-combine" style="font-weight: bold;padding:10px">
                                Articles: <i class="icon-cart-mini biolife-icon" style="color: #ff9702;"></i>
                                <span class="qty"></span>
                            </span>

                            <?php

                            $total_price = 0;
                            $total_item = 0;

                            $product_image;
                            $output = '';
                            if (!empty($_SESSION["shopping_cart"])) {
                                foreach ($_SESSION["shopping_cart"] as $keys => $values) {

                                    $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
                                    $total_item = $total_item + 1;
                                    $total = number_format($total_price, 2);

                                    $id = $values["product_id"];
                                    $product_name = $values["product_name"];
                                    $product_price = $values["product_price"];
                                    $product_quantity = $values["product_quantity"];



                                    $get_cart_items = query("SELECT * FROM products WHERE product_id=" . $id . "");
                                    confirm($get_cart_items);
                                    $row = mysqli_fetch_assoc($get_cart_items);



                                    $output .= '
                                    <ul class="cart-list">
                                        <li class="cart-elem">
                                            <div class="cart-item">
                                                <div class="product-thumb">
                                                    <a class="prd-thumb" href="#">
                                                        <img src="uploads/' . $row['product_image'] . '" width="113" height="113" alt="shop-cart">
                                                    </a>
                                                </div>
                                            ';


                                    $output .= '
                                                <div class="info">
                                                    <span class="txt-quantity">' . $product_quantity . 'X</span>
                                                    <a href="#" class="pr-name">' . $product_name . '</a>
                                                </div>
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>' . number_format($values["product_quantity"] * $values["product_price"], 2) . '</span></ins>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                  
                                    </ul>
                                    ';
                                }

                                $output .= '
                                    <ul class="subtotal">
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">Subtotal</b>
                                                <span class="stt-price">' . number_format($total_price, 2) . '</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">Livraison</b>
                                                <span class="stt-price" style="color:green;">Gratuite</span>
                                            </div>
                                        </li>
                                       
                                    
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">total:</b>
                                                <span class="stt-price"> TND,' . number_format($total_price, 2) . '</span>
                                                
                                            </div>
                                        </li>
                                    </ul>
                              ';

                                echo $output;
                            }



                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php require_once("templates/front/footer.php"); ?>