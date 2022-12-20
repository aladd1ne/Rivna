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
                      data-target=".bd-example-modal-lg">Add table</div>
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
                            <th>Prix</th>
                            
                            <th>Quantite</th>
                             
                            <th>Qualite</th>
                            <th>disponibilité</th>
                            <th>Unité</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php get_products(); ?>
                 
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
                <?php add_products();  ?>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Titre</label>
                        <input type="text" name="product_name" class="form-control" id="inputEmail4" placeholder="Titre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Catégorie</label>
                        <select id="inputState" class="form-control" name="product_category_id" >
                        <?php  show_categories_add_product_page(); ?> 
                        </select>
                      </div>
                    </div>  

                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Prix</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Prix" name="product_price" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Prix de base</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Prix de base" name="base_price" >
                      </div>
                    </div>  


                    <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="inputEmail4">Quantite</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Quantite" name="product_quantity">
                      </div>  
                      <div class="form-group col-md-6">
                      
                      <label for="inputEmail4">Image</label>
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="file">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                      </div>
                    </div>


                    <div class="form-row">
                      <div class="form-group col-md-4">
                      <label for="inputState">Qualite</label>
                        <select id="inputState" class="form-control" name="product_quality">
                          <option value="excellent">excellent</option>
                          <option value="moyenne">moyenne</option>
                          <option value="faiblesse">faiblesse</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Disponibilité</label>
                        <select id="inputState" class="form-control" name="product_availability">
                        
                          <option value="disponibles en magasin">disponibles en magasin</option>
                          <option value="non disponible en magasin">non disponible en magasin</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Unite</label>
                        <select id="inputState" class="form-control" name="product_unit">
                          
                          <option value="Kg">Kg</option>
                          <option value="Botte">Botte</option>
                        </select>
                      </div>
                    </div>

                      <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="product_description"></textarea>
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
      
      function get_products(){
        $query = query("SELECT * FROM products");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $category =  show_product_category_title($row['product_category_id']);
    
         $product_image =  $row['product_image'];
    
        $products = <<<DELIETER
        <tr>
        <td>
        {$row['product_id']}</td>
        <td>
        <img src="../uploads/{$row['product_image']}" style="width:50px;">
        {$row['product_name']}
        </td>
        <td class="align-middle"> $category </td>
        <td>TND, <span style="font-weight: bold;">{$row['product_price']}</span></td>
         
        <td>{$row['product_quantity']}</td>
        
        <td>{$row['product_quality']}</td>
        <td>
        
        {$row['product_availability']}
        
        </td>
        <td>{$row['product_unit']}</td>


        
        <td>
        <a href="edit-product.php?id={$row['product_id']}"><i class="fa fa-edit fa-lg  " style='color:orange;' > </i></a>
        <a href="delete-product.php?id={$row['product_id']}"><i class="fa fa-trash fa-lg delete" style='color:red;'> </i></a>
        </td>
      </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }
      
      ?>

