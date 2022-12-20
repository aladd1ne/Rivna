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
                    <h4>Tableau de commande</h4>
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
                            <th>Total de la commande</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php get_order(); ?>
                 
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


    

