<?php

echo '<link href = "style.css" rel="stylesheet" type = "text/css"/>';



$pdsktop = 800.0;
$plptop = 500.0;
$pcellp = 300.0;

$user = $_POST["user"];
$passwd = $_POST["password"];
$shipping = $_POST["shipping"];

echo "<h1> Welcome  $user to the Electronics shop</h1><br><br>";

$qdsktop = $_POST["dsktop"];
$qlptop = $_POST["lptop"];
$qcellp = $_POST["cphone"];

echo "<h1> Your password is $passwd .</h1> ";

$tdsktop = $qdsktop*$pdsktop;
$tlptop = $qlptop*$plptop;
$tcellp = $qcellp*$pcellp;

if($shipping == "week")
    $shippingcost = 0.0;
else if($shipping == "overnight")
    $shippingcost = 50.0;
else
    $shippingcost = 5.0;

$itemTotals = $tdsktop + $tlptop + $tcellp + $shippingcost;
echo "<h1> Here is your Receipt </h1>";

echo '<table border="1" style= "width=100%" >';
    echo'<td></td> <td class="hd">Quantity</td> <td class="hd">Cost Per Item</td> <td class="hd">Sub Total</td> <tr> ';
    echo'<td class="hd"> Desktop(s)</td>';
        echo"<td> $$qdsktop </td>";
        echo"<td> $$pdsktop </td> ";
        echo"<td> $$tdsktop </td> <tr>";
    echo'<td class="hd">Laptop(s)</td>';
        echo"<td> $$qlptop </td> ";
        echo"<td> $$plptop </td> ";
        echo"<td> $$tlptop </td> <tr>";
    echo'<td class="hd">Cell Phone(s)</td>';
        echo"<td> $$qcellp </td> ";
        echo"<td> $$pcellp </td> ";
        echo"<td> $$tcellp </td> <tr>";
    echo'<td class="hd">Shipping</td>';
        echo"<td colspan='2''> $shipping </td> ";
        echo"<td> $$shippingcost </td> <tr>";
    echo'<td class="hd">Total Cost</td>';
        echo"<td colspan='3'> $$itemTotals </td> <tr>";


echo '</table>';
?>
