<?php

$user = $_POST["email"];
$pass = $_POST["password"];

$shipmentChoice = $_POST["ship"];
$shipmentPrice=0;

if($shipmentChoice == "Standard")
{
	$shipmentPrice = 0;
}
else if($shipmentChoice == "Overnight")
{
	$shipmentPrice = 50;
}
else
{
	$shipmentPrice = 5;
}

$num1 = $_POST["sand"];
$num2 = $_POST["nugs"];
$num3 = $_POST["strips"];

$totalPrice1 = $num1 * 3.49;
$totalPrice2 = $num2 * 2.99;
$totalPrice3 = $num3 * 4.49;

echo "<h2>Thank you for shopping at Chickfila</h2><br>";
echo "<p>Username (Email): " . $user . "<br>";
echo "Password: " . $pass . "</p><br><br>";
echo '<link href="style.css" rel="stylesheet" type="text/css"/>';
echo "<table>";
echo "<tr> <th></th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th></tr>";
echo "<tr> <th>Chicken Sandwich</th> <td>" . $num1 . "</td> <td>$3.49</td> <td>$" . $totalPrice1 . "</td> </tr>";
echo "<tr> <th>Chicken Nuggets</th> <td>" . $num2 . "</td> <td>$2.99</td> <td>$" . $totalPrice2 . "</td> </tr>";
echo "<tr> <th>Chicken Strips</th> <td>" . $num3 ."</td> <td>$4.49</td> <td>$" . $totalPrice3 . "</td> </tr>";
echo '<tr> <th>Shipping</th> <td colspan="2">' . $shipmentChoice . "</td><td>$" . $shipmentPrice . "</td></tr>" ;
echo '<tr> <th colspan="3">Total Cost</th> <th>$' . ($totalPrice1+$totalPrice2+$totalPrice3+$shipmentPrice) . "</th> </tr>";
echo "</table>";

?>
