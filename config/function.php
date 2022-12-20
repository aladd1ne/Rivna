<?php 

function last_id(){

global $connection;
return mysqli_insert_id($connection);
}



function set_message($msg){
    
    if(!empty($msg)) {
    
    $_SESSION['message'] = $msg;
    
    } else {
    
    $msg = "";
    
    
        }
    
    
    }
    
    
  function display_message() {
    
    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }

  
    
    }

function redirect($location){

    header("Location: $location");
}

function query($sql){

    global $connection;
    return mysqli_query($connection,$sql);
}

function confirm($result){
    global $connection;
    if (!$result) {

        die("Query Failed". mysqli_error($connection));
    }
}

 function escape_string($string){
        global $connection;

        return mysqli_real_escape_string($connection,$string);

    }


function fetch_array($result){

return mysqli_fetch_array($result);
}


// function display_image($image){

//     global $upload_directory;

//     return $upload_directory . DS . $image;
// }


////////////////////////////////////

 



function get_product(){

    $query = query("SELECT * FROM products ");
    confirm($query);

    while ($row = fetch_array($query)) {
        
        $product = <<<DELIETER
        <li class="product-item">
        <div class="contain-product layout-default">
            <div class="product-thumb">
                <a href="single-product.php?id={$row['product_id']}" class="link-to-product">
                    <img src="uploads/{$row['product_image']}" alt="Vegetables" width="270" height="270" class="product-thumnail">
                </a>
                
            </div>
            <div class="info">
                <b class="categories">Vegetables</b>
                <h4 class="product-title"><a href="single-product.php?id={$row['product_id']}" class="pr-name">{$row['product_name']}</a></h4>
                <div class="price ">
                    <ins><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>{$row['product_price']}</span></ins>
                    <del><span class="price-amount"><span class="currencySymbol">TND</span>{$row['base_price']}</span></del>
                </div>
                <div class="slide-down-box">
                    <p class="message">All products are carefully selected to ensure food safety.</p>
                    <div class="buttons">
                        
                        <a href="single-product.php?id={$row['product_id']}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Voir le produit</a>
                         
                        
                    </div>
                </div>
            </div>
        </div>
    </li>

DELIETER;

echo $product;
    }
}

function get_product_in_shop(){

    $query = query("SELECT * FROM products ");
    confirm($query);

    while ($row = fetch_array($query)) {
        
        $product = <<<DELIETER
        <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
        <div class="contain-product layout-default">
            <div class="product-thumb">
                <a href="single-product.php?id={$row['product_id']}" class="link-to-product">
                    <img src="uploads/{$row['product_image']}" alt="dd" width="270" height="270" class="product-thumnail">
                </a>
            </div>
            <div class="info">
                <b class="categories">Fresh Fruit</b>
                <h4 class="product-title"><a href="single-product.php?id={$row['product_id']}" class="pr-name">{$row['product_name']}</a></h4>
                <div class="price">
                    <ins><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>{$row['product_price']}</span></ins>
                    <del><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>{$row['base_price']}</span></del>
                </div>
                <div class="shipping-info">
                    <p class="shipping-day">3-Day Shipping</p>
                    <p class="for-today">Pree Pickup Today</p>
                </div>
                <div class="slide-down-box">
                    <p class="message">All products are carefully selected to ensure food safety.</p>
                    <div class="buttons">
                        
                        <a href="config/cart.php?add_to_cart={$row['product_id']}" id='open_here' class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                         
                    </div>
                </div>
            </div>
        </div>
    </li>

DELIETER;

echo $product;
    }
}

function get_product_in_cat_page(){

    $query = query("SELECT * FROM products WHERE product_category_id=".escape_string($_GET['id'])." ");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIETER
        <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
        <div class="contain-product layout-default">
            <div class="product-thumb">
                <a href="single-product.php?id={$row['product_id']}" class="link-to-product">
                    <img src="uploads/{$row['product_image']}" alt="dd" width="270" height="270" class="product-thumnail">
                </a>
            </div>
            <div class="info">
                <b class="categories">Fresh Fruit</b>
                <h4 class="product-title"><a href="single-product.php?id={$row['product_id']}" class="pr-name">{$row['product_name']}</a></h4>
                <div class="price">
                    <ins><span class="price-amount"><span class="currencySymbol" style="font-size:13px;">TND</span>{$row['product_price']}</span></ins>
                    <del><span class="price-amount"><span class="currencySymbol" style="font-size:13px;">TND</span>{$row['base_price']}</span></del>
                </div>
                <div class="shipping-info">
                    <p class="shipping-day">Disponible en magasin</p>
                    <p class="for-today">Livraison gratuite</p>
                </div>
                <div class="slide-down-box">
                    <p class="message">All products are carefully selected to ensure food safety.</p>
                    <div class="buttons">
                        
                        <a href="config/cart.php?add_to_cart={$row['product_id']}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                         
                    </div>
                </div>
            </div>
        </div>
    </li>

DELIETER;

echo $product;
    }

}

function get_categories(){

    $query = query("SELECT * FROM categories ");
    confirm($query);

    while ($row = fetch_array($query)) {
        
        $categories = <<<DELIETER

      <li class="menu-item"><a href="shop-item.php?id={$row['categories_id']}" class="menu-name"><i class="biolife-icon {$row['categories_tag']}"></i>{$row['categories_name']}</a></li>

DELIETER;

echo $categories;


    }

}


function get_categories_in_shop(){

    $query = query("SELECT * FROM categories ");
    confirm($query);

    while ($row = fetch_array($query)) {
        
        $categories = <<<DELIETER

        <option value="shop-item.php?id={$row['categories_id']}">{$row['categories_name']} </option>

DELIETER;

echo $categories;


    }

}


function show_product_category_title($product_category_id){

    $category_query = query("SELECT * FROM categories WHERE categories_id ='{$product_category_id}'");
    confirm($category_query);
    
    while ($category_row = fetch_array($category_query)) {
                
    return $category_row['categories_name'];
    }
    
    
    
    }



    function add_products(){

        if (isset($_POST['submit'])) {
           
           $product_name         = escape_string($_POST['product_name']);
           $product_category_id  = escape_string($_POST['product_category_id']);
           $product_price        = escape_string($_POST['product_price']);
           $base_price           = escape_string($_POST['base_price']);
           $product_quantity     = escape_string($_POST['product_quantity']);
           $product_description  = escape_string($_POST['product_description']);
           $product_quality      = escape_string($_POST['product_quality']);
           $product_availability = escape_string($_POST['product_availability']);
           $product_unit         = escape_string($_POST['product_unit']);
           
           $product_image       = escape_string($_FILES['file']['name']);
           $image_temp          = escape_string($_FILES['file']['tmp_name']);

           $destination = "../uploads/".$_FILES['file']['name'];
           move_uploaded_file($_FILES['file']['tmp_name'],$destination);
    
           $query = query("INSERT INTO products(product_name,product_category_id,product_price,base_price,product_quantity,product_image,product_description,product_quality,product_availability,product_unit) 
    
                           VALUES('{$product_name}', '{$product_category_id}',
                           '{$product_price}','{$base_price}','{$product_quantity}',
                           '{$product_image}','{$product_description}','{$product_quality}','{$product_availability}','{$product_unit}')");
    
            $last_id = last_id();
            confirm($query);
    
            set_message("New product with id {$last_id} was added");
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
    
        }
    }
    
      function show_categories_add_product_page(){
    
    
                    $query = query("SELECT * FROM categories ") ;
                    confirm($query);
    
                    while ($row = fetch_array($query)) {
                            
                        $categories_options = <<<DELIETER
    
                    <option value="{$row['categories_id']}">{$row['categories_name']}</option>
    DELIETER;
    echo $categories_options;
                 
                
                  }  
    
        }

        function update_products(){

            if (isset($_POST['update'])) {
               
                $product_name         = escape_string($_POST['product_name']);
                $product_category_id  = escape_string($_POST['product_category_id']);
                $product_price        = escape_string($_POST['product_price']);
                $base_price           = escape_string($_POST['base_price']);
                $product_quantity     = escape_string($_POST['product_quantity']);
                $product_description  = escape_string($_POST['product_description']);
                $product_quality      = escape_string($_POST['product_quality']);
                $product_availability = escape_string($_POST['product_availability']);
                $product_unit         = escape_string($_POST['product_unit']);
                $product_image       = escape_string($_FILES['file']['name']);
                $image_temp          = escape_string($_FILES['file']['tmp_name']);
     
             
                 
        
               if (empty($product_image)) {
                   
                   $query = query("SELECT product_image FROM products WHERE product_id = ".escape_string($_GET['id']." "));
                   confirm($query);
        
                   while ($row = fetch_array($query)) {
                       
                       $product_image  = $row['product_image'];
                   }
               }
        
               $destination = "../uploads/".$_FILES['file']['name'];
               move_uploaded_file($_FILES['file']['tmp_name'],$destination);
        
               $query  = "UPDATE products SET ";
               $query .= "product_name          = '{$product_name}', ";
               $query .= "product_category_id   = '{$product_category_id}', ";
               $query .= "product_price         = '{$product_price}', ";
               $query .= "base_price            = '{$base_price}', ";
               $query .= "product_quantity      = '{$product_quantity}', ";
               $query .= "product_image         = '{$product_image}', ";
               $query .= "product_description   = '{$product_description}', ";
               $query .= "product_quality       = '{$product_quality}', ";
               $query .= "product_availability  = '{$product_availability}', ";
               $query .= "product_unit          = '{$product_unit}' ";
               $query .= "WHERE product_id = " . escape_string($_GET['id']);
        
               $send_update_query = query($query);
               confirm($query);
        
               set_message("product has been updated");
               $referer = $_SERVER['HTTP_REFERER'];
               header("Location: $referer");
        
            }
        }


        
    function add_categ(){

        if (isset($_POST['submit'])) {
           
           $categories_name = escape_string($_POST['categories_name']);
           $categories_tag  = escape_string($_POST['categories_tag']);
      
           $query = query("INSERT INTO categories(categories_name,categories_tag) 
                           VALUES('{$categories_name}', '{$categories_tag}')");
    
            $last_id = last_id();
            confirm($query);
    
            set_message("New product with id {$last_id} was added");
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
    
        }
    }

    function get_order(){
        $query = query("SELECT * FROM orders");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $products = <<<DELIETER
        <tr>
        <td>{$row['order_Id']}</td>
        <td>{$row['client_name']}</td>
        <td>{$row['client_lst_name']}</td>
        <td>{$row['client_number']}</td>
        <td>{$row['order_address']}</td>
        <td><span style="font-size:8px;font-weight:bold;">TND,</span>{$row['order_total']}</td>

        <td>
       
        <a href="delete-product.php?id={$row['order_Id']}"><i class="fa fa-trash fa-lg delete" style='color:red;'> </i></a>
        </td>
      </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }

      function get_order_item(){
        $query = query("SELECT * FROM order_items");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $products = <<<DELIETER
        <tr>
        <td>{$row['order_item_id']}</td>
        <td style="font-weight:bold;font-size:16px;color:green;">{$row['order_id']}</td>
        <td>{$row['product_id']}</td>
        <td>{$row['product_title']}</td>
        <td><span style="font-size:8px;font-weight:bold;">TND,</span>{$row['product_price']}</td>
        <td>*{$row['product_quantity']}</td>

        <td>
       
        <a href="delete-product.php?id={$row['order_item_id']}"><i class="fa fa-trash fa-lg delete" style='color:red;'> </i></a>
        </td>
      </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }


      function get_contact(){
        $query = query("SELECT * FROM contact");
        confirm($query);
    
    
        while ($row = fetch_array($query)) {
        $products = <<<DELIETER
        <tr>
        <td>{$row['contact_id']}</td>
        <td>{$row['contact_name']}</td>
        <td>{$row['contact_mail']}</td>
        <td>{$row['contact_number']}</td>
       
        <td>*{$row['contact_content']}</td>

        
      </tr>  
           
    DELIETER;
    
    echo $products;
            
        }
      }



?>
