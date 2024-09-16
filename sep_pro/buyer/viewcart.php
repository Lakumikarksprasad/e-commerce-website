<?php
include "authguard.php";
include "menu.html";
include "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");
$total=0;
while($row=mysqli_fetch_assoc($sql_result)){
    $total+=$row['price'];
    echo "<div class='card'>
    <div class='name'>$row[name]</div>
    <div class='price'>$row[price]</div>
    <img src='$row[impath]'>
    <div class='detail'>$row[detail]</div>
    <div class='action'>
        <a. href='removecart.php?cartid=$row[cartid]'>
            <button class='btn'>Remove item</button>
        </a.
    </div>";
}
echo"<hr>";
echo"<div class='place-order'>
<h1>Total Price = $total Rs.<h1>
<a href='placeorder.php'>
    <button>Place Order</button>
</a>
</div>"
?>