<?php require_once("config/config.php"); ?>

<?php require_once("templates/front/header.php"); ?>
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Créer votre compte Ched-Darek</h1>
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

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       
                    </div>
                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 3em;">
                        <div class="signin-container">
                            <h1><?php display_message(); ?></h1>
                            <form action="#" name="frm-login" method="post">
                                <?php register_user(); ?>
                                <p class="form-row">
                                    <label for="fid-name">Nom:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="name" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Prenom:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="lastname" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Num Tel:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="contact" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Email Address:<span class="requite">*</span></label>
                                    <input type="email" id="fid-name" name="email" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Address:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="address" value="" class="txt-input" required autofocus>
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="password" value="" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn" style="text-align: center;">
                                    <button class="btn btn-submit btn-bold" name="submit" type="submit" style="width: 100%;">sign in</button>
                                    
                                </p>
                            </form>
                        </div>
                    </div>

             

                </div>

            </div>

        </div>

    </div>

    <?php require_once("templates/front/footer.php"); ?>


    <?php 

function register_user(){
  
  if (isset($_POST['submit'])) {
    $name     = escape_string($_POST['name']);
    $lastname = escape_string($_POST['lastname']);
    $contact  = escape_string($_POST['contact']);
    $address  = escape_string($_POST['address']);
    $email    = escape_string($_POST['email']);
    $password = escape_string($_POST['password']);
  
    $query = query("INSERT INTO users (user_mail,username,user_lastname,user_password,user_address,user_contact )
    VALUES('{$email}','{$name}','{$lastname}','{$password}','{$address}','{$contact}')");
    confirm($query);
  
    if ($query) {
        $fetch_user = query("SELECT * FROM users WHERE user_mail = '{$email}' AND user_password = '{$password}'  ");
        confirm(($fetch_user));
        
        while ($row = fetch_array($fetch_user)) {
            $_SESSION['username']      = $row['username'];
            $_SESSION['user_lastname'] = $row['user_lastname'];
            $_SESSION['user_address']  = $row['user_address'];
            $_SESSION['user_contact']  = $row['user_contact'];
        }
    }

        header("Location: index.php");
   
        // header("Location: index.php");
        // echo'work fine';
   
  
  
  }


}



?>