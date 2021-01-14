<?php
include "connection.php";
include "function.php";

$sqlmodel = command("SELECT product_id, quantity, price, model, percentage order by date_modified desc");
$products = array();
while($checkmodel = mresa($sqlmodel)){
	$products["products"][] = array(
		  "model" => $checkmodel['model'],
		  "price" => $checkmodel['price'] ? str_replace('.0000', '', $checkmodel['price']) : '',
		  "stok" => $checkmodel['quantity'] ? $checkmodel['quantity'] : '',
		  "disc" => $checkmodel['percentage'] ? $checkmodel['percentage'] : '' 
		);
}
echo json_encode($products);