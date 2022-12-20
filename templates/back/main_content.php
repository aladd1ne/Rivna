<style>
  td{
    font-size: 14px;
    font-weight: bold;
  }
</style>
<div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Commandes</h5>
                          <?php 
                          $query = query("SELECT * FROM orders"); 
                          confirm($query);
                         
                           $row = mysqli_num_rows($query); 
                          
                            echo '<h2 class="mb-3 font-18"> <span>Total:</span> '.$row.' </h2>';

                          ?>
                          
                          <p class="mb-0">Mois: <span class="col-green"><?php echo  date('F'); ?></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Clients</h5>
                          <?php 
                          $query = query("SELECT * FROM users"); 
                          confirm($query);
                         
                           $row = mysqli_num_rows($query); 
                          
                            echo '<h2 class="mb-3 font-18"> <span>Total:</span> '.$row.' </h2>';

                          ?>
                          
                          <p class="mb-0">Mois: <span class="col-green"><?php echo  date('F'); ?></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Articles</h5>
                          <?php 
                          $query = query("SELECT * FROM products"); 
                          confirm($query);
                         
                           $row = mysqli_num_rows($query); 
                          
                            echo '<h2 class="mb-3 font-18"> <span>Total:</span> '.$row.' </h2>';

                          ?>
                          <p class="mb-0">Mois: <span class="col-green"><?php echo  date('F'); ?></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Revenu</h5>
                          <?php 
                          $query = query("SELECT SUM(order_total) FROM orders"); 
                          confirm($query);
                         
                          while ($row = fetch_array($query)) {
                          
                            echo '<h2 class="mb-3 font-18"> <span style="font-size:13px;">TND,</span>'.number_format((float)$row['SUM(order_total)'], 2, '.', '') .' </h2>';
                          }

                          ?>
                          
                          <p class="mb-0">Mois: <span class="col-green"><?php echo  date('F'); ?></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
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
          
          <div class="row">
           
            <div class="col-12">
            <div class="card">
                  <div class="card-header">
                    <h4>Tableau de Contact</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">#ID</th>
                            <th>Nom du contact</th>
                            <th>mail du contact</th>
                            <th>Num Tél du contact</th>
                            
                            <th>Contenu du contact</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php get_contact(); ?>
                 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
      
      </div>