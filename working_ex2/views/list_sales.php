<?php
include('./includes/product_functions.inc.php');
echo BOX_BEGIN;
echo '<h2>Current Sale Items</h2>';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<h3 id="' . $row['sku'] . '">' . $row['category'] . '::' . $row['name'] . '</h3>
		<div class="img box">
		<p><img alt="' . $row['name'] . '" src="/products/' . $row['image'] . '" />' . $row['description'] . '<br />' . get_price('goodies', $row['price'], $row['sale_price']) . ' <strong>Availability:</strong> ' . get_stock_status($row['stock']) . '</p>
		<p><a href="/cart.php?sku=' . $row['sku'] . '&action=add" class="button">Add to Cart</a></p></div>';
}
echo BOX_END;