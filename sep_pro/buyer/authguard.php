<?php
session_start();
if(isset($_SESSION['login_status'])){
    echo"<h1>Skipped LOGIN, Please login</h1>";
    echo"<a href='../shared/login.html'>Login here</a>";
    die;
}
if($_SESSION['login_status']==false){
    echo"<h1>LOGIN with proper credentials</h1>";
    echo"<a href='../shared/login.html'>Login here</a>";
    die;
}
if($_SESSION['user_type']!='Buyer'){
    echo"Unauterized attempt, Forbidden access";
    die;
}
echo"<div style='display:flex;justify-content:space-around;background-colour:bisque;padding:10px;margin:0'>
    <div>$_SESSION[username]</div>
    <div>$_SESSION[usertype]</div>
    <div>
        <a href='../shared/logout.php'>Logout</a>
    </div>
</div>";

?>