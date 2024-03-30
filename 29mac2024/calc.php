<?php
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$tax = $_POST["tax"];
$discount = $_POST["discount"];

echo '<form>';
echo '<fieldset>'.'<legend>'.'<font color="tomato">'.'Calculator'.'</font>'.'</legend>';
echo '<p>'.'Use this form to calculate the order total.'.'</p>';

echo '<label for="quantity">'.'Quantity'.'</label>'.'<br>';
echo '<input type="text" id="quantity" name="quantity" value="'.$quantity.'" readonly="readonly">'.'<br>';
echo '<label for="price">'.'Price Per Unit'.'</label>'.'<br>';
echo '<input type="text" id="price" name="price" value="'.$price.'" readonly="readonly">'.'<br>';
echo '<label for="tax">'.'Tax Rate (%)'.'</label>'.'<br>';
echo '<input type="text" id="tax" name="tax" value="'.$tax.'" readonly="readonly">'.'<br>';
echo '<label for="discount">'.'Discount (%)'.'</label>'.'<br>';
echo '<input type="text" id="discount" name="discount" value="'.$discount.'" readonly="readonly">'.'<br>';
echo '<label for="total">'.'Total'.'</label>'.'<br>';
$totalprice = $quantity * $price;
$taxrate = $totalprice*$tax/100;
$discountrate = $totalprice*$discount/100;
$total = $totalprice + $taxrate - $discountrate;

echo '<input type="text" id="total" name="total" value="'.$total.'" readonly="readonly">'.'<br>';





echo '</fieldset>';
echo '</form>';

?>