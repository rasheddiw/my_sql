<?php 

if(isset($_POST['btn']))
{
	$db = new mysqli("localhost","root","","sql_practice");

	$manufacturer_name = $_POST['mnfname'];
	$manufacturer_add = $_POST['mnfadd'];
	$manufacturer_cntc = $_POST['mnfcontc'];

	$db->query("call manufacture_info ('$manufacturer_name','$manufacturer_add','$manufacturer_cntc')");
	echo "Successfully Added";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Manufacturer</title>
</head>
<body>

	<form action="#" method="POST">
		<div>
			Manufacturer<br>
			<input type="text" name="mnfname">
		</div>
		<div>
			Address<br>
			<input type="text" name="mnfadd">
		</div>

		<div>
			Contact<br>
			<input type="text" name="mnfcontc">
		</div>

		<div>
			<input type="submit" name="btn" value="Submit">
		</div>
	</form>

</body>
</html>