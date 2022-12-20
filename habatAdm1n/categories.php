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
                    <h4>Tableau des produits</h4>
                    <div class="btn btn-success" style="cursor:pointer;" data-toggle="modal"
                      data-target=".bd-example-modal-lg">Add Categories</div>
                  </div>
                  
                  <div class="card-body">
                    
    
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #ID
                            </th>
                           
                            <th>Titre</th>
                            <th>Categorie</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php get_categ(); ?>
                 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            
          </div>
        </section>
          <!-- Large modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Ajouter un produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method=post enctype="multipart/form-data">
                <?php add_categ();  ?>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Titre</label>
                        <input type="text" name="categories_name" class="form-control" id="inputEmail4" placeholder="Titre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Catégorie</label>
                        <select id="inputState" class="form-control" name="categories_tag" >
                         <option value="icon-fruits">icon-fruits</option>
                         <option value="icon-broccoli-1">icon-broccoli-1</option>
                         <option value="icon-grape">icon-grape</option>
                         <option value="icon-fish">icon-fish</option>
                         <option value="icon-honey">icon-honey</option>
                         <option value="icon-fast-food">icon-fast-food</option>
                         <option value="icon-beef">icon-beef</option>
                         <option value="icon-onions">icon-onions</option>
                         <option value="icon-avocado">icon-avocado</option>
                         <option value="icon-contain">icon-contain</option>
                         <option value="icon-fresh-juice">icon-fresh-juice</option>
                          
                        </select>
                      </div>
                    </div>  
                    </div>  
                  <div class="form-group">
                    <button class="btn btn-primary" name="submit" >Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

 
      <?php require_once("../templates/back/footer.php"); ?>


      <?php  
      
      function get_categ(){
        $query = query("SELECT * FROM categories");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $category =  show_product_category_title($row['categories_id']);
    
         $categories_tag =  $row['categories_tag'];
    
        $products = <<<DELIETER
        <tr>
        <td>
        {$row['categories_id']}</td>
        <td>{$row['categories_name']}</td>
        <td>{$row['categories_tag']}</td>
        <td><a href="delete-categorie.php?id={$row['categories_id']}"><i class="fa fa-trash fa-lg delete" style='color:red;'> </i></a></td>
        </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }
      
      ?>

