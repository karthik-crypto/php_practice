<?php
 require 'index.php';
 $msg="";
if(isset($_POST['submit'])){
    $p_name=$_POST['pname'];
    $p_price=$_POST['pprice'];

    $target_dir="image/";
    $target_file=$target_dir.basename($_FILES['pImage']['name']);
    move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);

    $sql="INSERT INTO product(product_name,product_price,product_image)VALUES('$p_name', '$p_price','$target_file')";
    if(mysqli_query($conn,$sql)){
        $msg="data base is created";
    }

    else{
        $msg="unable to connect"; 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body bg-color="blue"><center>
    <div class="container">
    <div class="row-justify-content-center">
    <div class="col-md-6 bg-light mt-4 round">
    <h2 class="text-center p-4">Add Product Info</h2></center>
<!--forms -->
    <form action=""  method="POST" class="p-2" enctype="multipart/form-data"  id="form-box">
    <div class="form-group">
    <input type="text" class="form-control" name="pname"  placeholder="product name" required>
    </div>
    <div>
    <input type="text" class="form-control" name="pprice"  placeholder="product price" required>
  </div>
    <div class="custom-file">
    <input type="file" name="pImage" class="custom-input-file" id="custom-file" required>
    <label for="custom-file" class="custom-file-label">choose product</label>
    </div class="form-group">
    <input type="submit" value="Add" class="btn-danger btn-block"> 
    </div>
    <div class="form-group">
    <?= $msg; ?>
    </div>
   </form>
   </div>
   </div>

  <center><div class="row-justify-content-center">
   <div class="btn-block bg-light col-md-6 mt-3 rounded">
   <a href="index" class="btn btn-block bg-ln btn-warning">Go to product</a>
   </div>
  </center>
</body>
</html>