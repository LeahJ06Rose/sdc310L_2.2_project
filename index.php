<html>
<head>
	<title>Catalog Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h3>Catalog Page</h3>
</header>
	<form method='POST'>
            <h3>Enter the product ID: <input type="text" name="prodID"></h3>
            <h3>Enter the product Name: <input type="text" name="prodName"></h3>
            <h3>Enter the product description: <input type="text" name="pDescript"></h3>
            <h3>Enter the product cost: <input type="text" name="prodCost"></h3>
			<h3>Enter the product quantity: <input type="text" name="prodQuan"></h3>
            <input type="submit" value="Submit Values">
			<a link href="cart.php">Shopping Cart</a>
    </form>
<?php
//Declare and clear variables for display
$product_ID = '';
$product_name = '';
$product_description = '';
$product_cost = '';
$product_quantity = '';

//Retrieve values from query
if (isset($_POST['prodID']))
	$product_ID = $_POST['prodID'];
if (isset($_POST['prodName']))
	$product_name = $_POST['prodName'];
if (isset($_POST['pDescript']))
	$product_description = $_POST['pDescript'];
if (isset($_POST['prodCost']))
	$product_cost = $_POST['prodCost'];
if (isset($_POST['prodQuan']))
	$product_quantity = $_POST['prodQuan'];


if (strlen($product_ID) > 0)
    echo "<h3> The ID you entered is: $product_ID </h3>";
if (strlen($product_name) > 0)
    echo "<h3> The product name you gave is: $product_name </h3>";
if (strlen($product_description) > 0)
	echo "<h3> The product description you gave was: $product_description </h3>";
if (strlen($product_cost) > 0)
	echo "<h3> The product cost was: $product_cost </h3>";
if (strlen($product_quantity) > 0)
	echo "<h3> The product quantity was: $product_quantity </h3>";
?>
<footer>
<p>Leah Jones</p>
</footer>
</body>
</html>