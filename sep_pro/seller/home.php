<?php
include "authguard.php";
include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body style="margin:0">
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="" method="post" class="w-50 bg-info p-4" enctype="multipart/form-data">
        <h4 class="text-center text-white">ADD PRODUCT</h4>
        <input required type="text" placeholder="Product Name" class="form-control mt-2" name="name">
        <input required type="number" placeholder="Product Price" class="form-control mt-2" name="price">
        <textarea required name="" id="" cols="30" rows="10" class="form-control mt-2" placeholder="product description"></textarea>
        <input required name="pdtimg" type="file" class="form-control mt-2">
        <div class="text-center mt-3">
            <button class="btn btn-primary">Upload</button>
        </div>
    </form>
</div>    
</body>
</html>