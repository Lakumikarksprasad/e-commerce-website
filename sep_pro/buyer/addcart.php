<html>
    <head>
        <style>
            .card{
                width: 300px;
                height: 300px;
                background-color: lightskyblue;
                display: inline-block;
                margin: 10px;
                padding: 10px;
            }
            img{
                width: 100%;
                height: 70%;
            }
            .name{
                font-size: 24px;
            }
            .price{
                font-size: 26px;
                font-weight: bold;
                color: crimson;
            }
            .price::after{
                content: "Rs";
            }
            .action{
                text-align: center;
            }
        </style>
    </head>
    <body>

    </body>
</html>
<?php
include "authguard.php";
include "menu.html";
$userid=$_SESSION['userid'];
$pid=$_GET['pid'];
include "../shared/connection.php";
$status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
if($status){
    echo"Added to cart successfully";
}
else{
    echo mysqli_error($conn);
}
?>