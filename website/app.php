<?php
	$json = file_get_contents("http://product-service");
	$obj = json_decode($json);
	$products = $obj->dev;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<h2>The Passion is :</h2>
	<ul>
		<?php
		foreach ($products as $pro) {

			echo "<li> $pro </li>";
		}
		?>
	</ul>
</body>
</html>