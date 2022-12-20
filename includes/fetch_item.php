<style>
    .qantite{
        padding: 10px 50px 0px 50px;
        border: thin;
     
        border-radius: 5px;
    }

  
</style>

<?php require_once("../config/config.php");?>

<?php  

$query = query("SELECT * FROM products ");
confirm($query);

while ($row = fetch_array($query)) {
    $output = '';


    $output .='

    <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="contain-product layout-default">
        <div class="product-thumb">
            <a href="single-product.php?id='.$row['product_id'].'" class="link-to-product">
                <img src="uploads/'.$row['product_image'].'" id="image'.$row["product_id"].'" alt="dd" width="270" height="270" class="product-thumnail">
            </a>
        </div>
        <div class="info">
            <b class="categories">Fresh Fruit</b>
            <h4 class="product-title"><a href="#" class="pr-name">'.$row['product_name'].'</a></h4>
            <div class="price">
                <ins><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>'.$row['product_price'].'</span></ins>
                <del><span class="price-amount"><span class="currencySymbol" style="font-size: 13px;">TND</span>'.$row['base_price'].'</span></del>
                <div class="qantite">
                <input type="number" name="quantity" id="quantity' . $row["product_id"] .'" class="form-control" value="1" style="text-align:center;background-color:#fafafa;"/>
                </div>
            	<input type="hidden" name="hidden_name" id="name'.$row["product_id"].'" value="'.$row["product_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["product_id"].'" value="'.$row["product_price"].'" />
            </div>
            <div class="shipping-info">
                <p class="shipping-day">3-Day Shipping</p>
                <p class="for-today">Pree Pickup Today</p>
            </div>
            <div class="slide-down-box">
                <p class="message">All products are carefully selected to ensure food safety.</p>
                <div class="buttons">
                    
                <input type="button" name="add_to_cart" id="'.$row["product_id"].'" style="width:100%;" class="btn add-to-cart-btn add_to_cart" value="Add to Cart" />
                     
                </div>
            </div>
        </div>
    </div>
</li>



    ';
 
echo $output;
}


?>


