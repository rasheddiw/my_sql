<?php 

$db = new mysqli("localhost","root","","sql_practice");

if(isset($_POST['btn']))
{
	$mnf_id = $_POST['mnfrow'];

	$db->query("delete from manufacturer where id='$mnf_id '");

	echo "Successfuly Deleted.";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Product</title>
</head>
<body>

	<form action="#" method="POST">
		<div>Manufacturer<br>
			<select name="mnfrow">
				<?php 

					$result = $db->query("SELECT id, name, address, contact_no FROM manufacturer");

					while(list($id,$name,$address,$contact_no) = $result->fetch_row())
					{
						echo "<option value='$id'>$name</option>";
						
					}

				?>
			</select>
		</div>
		<div>
			<input type="submit" name="btn" value="Delete">
		</div>
	</form>

		<?php 

			$result = $db->query("SELECT name,price,manufacturer_id FROM product");
			while(list($name,$price,$manufacturer_id) = $result->fetch_row())
			{
				echo $name." "."<br>";
			}
		?>
</body>
</html>