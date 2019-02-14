<?php
	session_start();
	require_once("config.php");
	require_once("cart.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Proudcts</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
		<h1>Products list</h1>
		<?php
			$cart = new cart();
			$products = $cart->getProducts();
		?>
		<a href="show-cart.php" title="go to cart">Go to cart</a><br />
		<table cellpadding="5" cellspacing="0" border="0">
			<tr>
				<td align="left" width="200"><b>Product</b></td>
				<td align="left" width="300" colspan="2"><b>Price</b></td>
			</tr>
			<?php
				foreach($products as $product){
			?>
				<tr>
					<td align="left"><?php echo  $product->product; ?></td>
					<td align="left"><?php echo  $product->price; ?></td>
					<td align="center"><span style="cursor:pointer;" class="addToCart" data-id="<?php echo  $product->id; ?>">add to cart</span></td>
				</tr>
			<?php 
				} 
			?>
		</table>
		
	</body>
</html>