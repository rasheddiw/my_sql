<?php 
	
$db = new mysqli("localhost","root","","sql_practice");

$result = $db->query("SELECT id, product_name, mfg_name FROM v_product");

while(list($id,$product_name,$mfg_name) = $result->fetch_row())
{
	echo $id." ".$product_name." ".$mfg_name."<br>";
}

?>