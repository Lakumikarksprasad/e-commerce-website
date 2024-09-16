<?php
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$conn=new mysqli("localhost","root","","acme23",3306);
$sql_result=mysqli_query($conn,"select * from user where username='$uname'and password='$upass'");
$row=mysqli_fetch_assoc($sql_result);
if($row){
    echo "Login is successfull";
}
else{
    echo"Invalid credentials";
}
?>