<?php require_once("../config/config.php"); ?>
<!-- Top Nav -->
<?php require_once("../templates/back/admin_nav.php"); ?>
<!-- Side Nav -->
<?php require_once("../templates/back/admin_sidebar.php"); ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

            
<?php 


if(isset($_GET['id'])) {


$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

    $product_name         = escape_string($row['product_name']);
    $product_category_id  = escape_string($row['product_category_id']);
    $product_price        = escape_string($row['product_price']);
    $base_price           = escape_string($row['base_price']);
    $product_quantity     = escape_string($row['product_quantity']);
    $product_description  = escape_string($row['product_description']);
    $product_quality      = escape_string($row['product_quality']);
    $product_availability = escape_string($row['product_availability']);
    $product_unit         = escape_string($row['product_unit']);
    $product_image        = escape_string($row['product_image']);


// $product_image = display_image($row['product_image']);



    }


update_products();



}





 ?>
            
                <div class="card">
                  <div class="card-header">
                    <h4><img width='100' src="../uploads/<?php echo $product_image; ?>" alt=""> <?php echo $product_name;?> </h4>
                    
                  </div>
                  <div class="card-body">
             
                  <form action="" method=post enctype="multipart/form-data">
                <?php add_products();  ?>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Titre</label>
                        <input type="text" name="product_name" value="<?php echo $product_name;?>" class="form-control" id="inputEmail4" placeholder="Titre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Catégorie</label>
                        <select id="inputState" class="form-control" name="product_category_id" >
                        <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>
                        <?php  show_categories_add_product_page(); ?> 
                        </select>
                      </div>
                    </div>  

                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Prix</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Prix" name="product_price" value="<?php echo $product_price; ?>" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Prix de base</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Prix de base" name="base_price" value="<?php echo $base_price; ?>" >
                      </div>
                    </div>  


                    <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="inputEmail4">Quantite</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Quantite" name="product_quantity" value ="<?php echo $product_quantity; ?>">
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
                         <option value ="<?php echo $product_quality; ?>"><?php echo $product_quality; ?></option>
                          <option value="excellent">excellent</option>
                          <option value="moyenne">moyenne</option>
                          <option value="faiblesse">faiblesse</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Disponibilité</label>
                        <select id="inputState" class="form-control" name="product_availability">
                        <option value ="<?php echo $product_availability; ?>"><?php echo $product_availability;?></option>
                          <option value="disponibles en magasin">disponibles en magasin</option>
                          <option value="non disponible en magasin">non disponible en magasin</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Unite</label>
                        <select id="inputState" class="form-control" name="product_unit">
                        <option value ="<?php echo $product_unit; ?>"><?php echo $product_unit;?></option>
                          <option value="Kg">Kg</option>
                          <option value="Botte">Botte</option>
                        </select>
                      </div>
                    </div>

                      <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="product_description">
                      <?php echo $product_description;?>
                      </textarea>
                    </div>
                    </div>  
                  
                
                  <div class="form-group">
                    <button class="btn btn-primary" name="update" >Submit</button>
                  </div>
                </div>
              </form>
               
              </div>
            </div>
          </div>
        </section>
    

 
      <?php require_once("../templates/back/footer.php"); ?>

 