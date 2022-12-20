<?php require_once("config/config.php"); ?>

<?php require_once("templates/front/header.php"); ?>
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Login</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Authentication</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <form action="#" name="frm-login" method="post">
                                <?php login_user(); ?>
                                <p class="form-row">
                                    <label for="fid-name">Email Address:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="email" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="password" value="" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" name="submit" type="submit">sign in</button>
                                    <a href="#" class="link-to-help">Forgot your password</a>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!--Go to Register form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <h4 class="box-title">New Customer?</h4>
                                <p class="sub-title">Create an account with us and you’ll be able to:</p>
                                <ul class="lis">
                                    <li>Check out faster</li>
                                    <li>Save multiple shipping anddesses</li>
                                    <li>Access your order history</li>
                                    <li>Track new orders</li>
                                    <li>Save items to your Wishlist</li>
                                </ul>
                                <a href="checkout-register.php" class="btn btn-bold">Create an account</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php require_once("templates/front/footer.php"); ?>


    <?php 

function login_user(){
  
  if (isset($_POST['submit'])) {
     
    $user_email    = escape_string($_POST['email']);
    $user_password = escape_string($_POST['password']);
  
    $query = query("SELECT * FROM users WHERE user_mail = '{$user_email}' AND user_password = '{$user_password}'");
    confirm($query);
  
    if (mysqli_num_rows($query) == 0) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }
  
    else {

        $fetch_user = query("SELECT * FROM users WHERE user_mail = '{$user_email}' AND user_password = '{$user_password}'  ");
        confirm(($fetch_user));

        while ($row = fetch_array($fetch_user)) {
            $_SESSION['username']      = $row['username'];
            $_SESSION['user_lastname'] = $row['user_lastname'];
            $_SESSION['user_address']  = $row['user_address'];
            $_SESSION['user_contact']  = $row['user_contact'];
        }

      
      
      redirect("checkout.php");
    }
  }


}



?>