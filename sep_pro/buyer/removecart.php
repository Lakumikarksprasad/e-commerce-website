<?php
include "authguard.php";
include "../shared/connection.php";
$cartid=$_GET['cartid'];
$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status){
    echo"Item removed successfully";
    header("location:home.php");
}
else{
    echo mysqli_error($conn);
}
?>