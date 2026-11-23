<html>
<head>
	<title>Cart Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h3>Cart Page</h3>
</header>
	<form method='POST'>
            <h3>Enter the product ID: <input type="text" name="prodID"></h3>
            <h3>Enter the product Name: <input type="text" name="prodName"></h3>
            <h3>Enter the quantity ordered: <input type="text" name="quanOrder"></h3>
            <h3>Enter the product cost: <input type="text" name="prodCost"></h3>
			<h3>Enter the product total: <input type="text" name="prodTotal"></h3>
            <input type="submit" value="Clear Out">
			<a link href="index.php">Catalog Page</a>
    </form>
<?php
//Declare and clear variables for display
$product_ID = '';
$product_name = '';
$quantity_ordered = '';
$product_cost = '';
$product_total = '';

//Retrieve values from query
if (isset($_POST['prodID']))
	$product_ID = $_POST['prodID'];
if (isset($_POST['prodName']))
	$product_name = $_POST['prodName'];
if (isset($_POST['quanOrder']))
	$quantity_ordered= $_POST['quanOrder'];
if (isset($_POST['prodCost']))
	$product_cost = $_POST['prodCost'];
if (isset($_POST['prodTotal']))
	$product_total = $_POST['prodTotal'];


if (strlen($product_ID) > 0)
    echo "<h3> The ID you entered is: $product_ID </h3>";
if (strlen($product_name) > 0)
    echo "<h3> The product name you gave is: $product_name </h3>";
if (strlen($quantity_ordered) > 0)
	echo "<h3> The quantity that you ordered was: $quantity_ordered </h3>";
if (strlen($product_cost) > 0)
	echo "<h3> The product cost was: $product_cost </h3>";
if (strlen($product_total) > 0)
	echo "<h3> The product total was: $product_total </h3>";

$itemsTotal = 0;
$tax = $itemsTotal * 0.05;
$shipping = $itemsTotal * 0.10;
$orderTotal = $itemsTotal + $tax + $shipping;

?>

<div class="summary">
<h3>Orders Summary</h3>
<p><strong>Total items ordered:</strong>
<? = array_sum(array_column($cart, 'qty')); ?>
</p>

<p><strong>Items Total:</strong>
$<? = number_format($itemsTotal, 2); ?>
</p>

<p><strong>Tax (5%):</strong>
$<?= number_format($tax, 2); ?>
</p>

<p><strong>Shipping & Handling (10%):</strong>
$<?= number_format($shipping, 2); ?>
</p>

<p><strong>Order Total:</strong>
$<?= number_format($orderTotal, 2); ?>
</p>
</div>

<footer>
<p>Leah Jones</p>
</footer>
</body>
</html>