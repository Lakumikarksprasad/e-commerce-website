<?php

    $username=$_POST['uname'];
    $upass=$_POST['upass1'];
    $usertype=$_POST['usertype'];

    include "../shared/connection.php";
    $status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$upass','$usertype')");
    if($status){
        echo "Registered Successfully";
    }
    else{
        echo "Error in SQL";
    }
?>