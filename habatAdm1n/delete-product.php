<?php 

require_once("../config/config.php");

if (isset($_GET['id'])) {

  $the_product_id = $_GET['id'];

$delete_product = query("DELETE FROM products WHERE product_id  = " 
.escape_string($the_product_id). "");
confirm($delete_product);
set_message("Product deleted");
$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}else{

   $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");

}

 ?>