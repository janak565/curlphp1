<?php
	session_start();
	require_once("config.php");
	require_once("cart.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Carts</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
		<h1>Show cart</h1>
		<?php
			$cart = new cart();
			$products = $cart->getCart();
		?>
		<table cellpadding="5" cellspacing="0" border="0">
			<tr>
				<td align="left" width="200"><b>Product</b></td>
				<td align="left" width="200"><b>Count</b></td>
				<td align="left" width="200" colspan="2"><b>Total</b></td>
			</tr>
			<?php
				foreach($products as $product){
			?>
				<tr>
					<td align="left"><?php print $product->product; ?></td>
					<td align="left"><?php print $product->count; ?></td>
					<td align="left">$<?php print $product->total; ?></td>
					<td align="center"><span style="cursor:pointer;" class="removeFromCart" data-id="<?php print $product->id; ?>">remove one element</span></td>
				</tr>
			<?php 
				}
			?>
		</table>
		<br /><a href="index.php" title="go back to products">Go back to products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="emptyCart" title="empty cart">Empty cart</a>
	</body>
</html>