<?php require_once("../config/config.php"); ?>

<?php   
if (empty($_SESSION['admin_name'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    if (isset($referer)) {
        header("location: $referer");
    } else {
        redirect("login.php");
    }
}


?>
<!-- Top Nav -->
<?php require_once("../templates/back/admin_nav.php"); ?>
<!-- Side Nav -->
<?php require_once("../templates/back/admin_sidebar.php"); ?>

<style>
  td{
    font-size: 14px;
    font-weight: bold;
  }
</style>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tableau des utilisateurs</h4>
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">#ID</th>
                            <th>Nom du client</th>
                            <th>Prénom du client</th>
                            <th>Contact du client</th>
                            <th>Adresse du client</th>
                            <th>Mail du client</th>
                            <th>Password du client</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php get_users(); ?>
                 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            
          </div>
        </section>

      <?php require_once("../templates/back/footer.php"); ?>


      <?php  
      
      function get_users(){
        $query = query("SELECT * FROM users");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $products = <<<DELIETER
        <tr>
        <td>{$row['user_id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['user_lastname']}</td>
        <td>{$row['user_contact']}</td>
        <td>{$row['user_address']}</td>
        <td>{$row['user_mail']}</td>
        <td> 
        <input type="password" value="{$row['user_password']}" id="myInput" style='margin-right:10px;'>  
        
        </td>

        
      </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }
      
      ?>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>