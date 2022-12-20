 

<?php 

session_start();
$total_price = 0;
$total_item = 0;


$output = '
<table class="shop_table cart-form">
    <thead>
        <tr>
            <th class="product-name">Product Name</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Total</th>
            <th class="product-subtotal">Action</th>
        </tr>
    </thead>
    <tbody>
';
if(!empty($_SESSION["shopping_cart"]))
{
   
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{

        
      
        
		$output .= '
		<tr class="cart_item">
		 
     
         
            <td>'.$values["product_name"].'</td>
			
			<td align="right">TND '.$values["product_price"].'</td>
            <td>'.$values["product_quantity"].'</td>
			<td align="right">TND '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">Supprimer</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;

        $total = number_format($total_price, 2);
        $_SESSION["order_total"] = $total;
	}
	$output .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">TND'.number_format($total_price, 2).'</td>  
        <td></td>  
    </tr>

    <tr class="cart_item wrap-buttons">
    <td class="wrap-btn-control" colspan="4">
        <a href="shop.php" class="btn back-to-shop">Back to Shop</a>
       
        <button class="btn btn-clear" type="reset" id="clear_cart">clear all</button>
    </td>
</tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center" class="jumbotron jumbotron-fluid" style="background-color:#fafafa;">
        
        <p class="lead">Votre panier Ched-Darek est vide.</p>
         <img src="assets/images/empty_cart.gif" width="200" alt="Be patient..." /> 
        
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'TND ' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);









?>


        




