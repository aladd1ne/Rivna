<?php require_once("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ched-Darek - Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<style>
  body{
  background: url(assets/img/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
  }

  #overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
</style>

<div id="overlay" >
<body >
  <div class="loader"></div>
  <div id="app">
    <section class="section"  >
      <div class="container" style="margin-top: 10em;"> 
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                <?php login_admin(); ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Name
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

               
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
             
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
             
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</div>



<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>


<?php 

function login_admin(){
  
  if (isset($_POST['submit'])) {
    $admin_name     = escape_string($_POST['name']);
    $admin_email    = escape_string($_POST['email']);
    $admin_password = escape_string($_POST['password']);
  
    $query = query("SELECT * FROM admins WHERE admin_name = '{$admin_name}' AND admin_email = '{$admin_email}' AND admin_password = '{$admin_password}' ");
    confirm($query);
  
    if (mysqli_num_rows($query) == 0) {
      redirect("index.php");
    }
  
    else {
      $fetch_user = query("SELECT * FROM admins WHERE admin_name = '{$admin_name}' AND admin_email = '{$admin_email}' AND admin_password = '{$admin_password}' ");
      confirm(($fetch_user));

      while ($row = fetch_array($fetch_user)) {
          $_SESSION['admin_name']     = $row['admin_name'];
          $_SESSION['admin_email']    = $row['admin_email'];
          $_SESSION['admin_image']    = $row['admin_image'];
     
      }

    
    set_message("Welcome to admin {$$user_name }");
    redirect("index.php");
    }
  }


}



?>