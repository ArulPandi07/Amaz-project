<?php

require 'includes/db_func.php';
require 'includes/session_check.php';

?>

<?php 

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
  
    $name = $_POST['name']; 
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $updated_at = $_POST['created_at'];
    
    $sql = "update products set name = '$name', category = '$category', quantity = '$quantity', price = '$price', created_at = '$created_at' where id = $id";
    $result = mysqli_query($con , $sql);

    if ($result == TRUE){

      header('location:product_list.php');
      
    }else{
  
      echo "Error:". $sql . "<br>". $conn->error;
  
    } 
}
else {
  $Product_data = getproductData($con, $id);
}

echo '<pre>';
print_r($Product_data);
echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Listing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <form method="post">
    
  <div class="form-group col-md-5">
            <label for="productname">Product name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $Product_data['name'] ?>">
        </div>
        <div class="form-group col-md-5">
        <label for="producCategory">Category</label>
        <select class="form-control" id="category" name="category" value="<?php echo $Product_data['category'] ?>">
            <option value="">--Choose Category--</option>
            <option value="Jeans"<?php echo ($Product_data['category'] === 'Jeans') ? ' selected' : '' ?>>Jeans</option>
            <option value="Shoes"<?php echo ($Product_data['category'] === 'Shoes') ? ' selected' : '' ?>>Shoes</option>
            <option value="Mobile Phones"<?php echo ($Product_data['category'] === 'Mobile Phones') ? ' selected' : '' ?>>Mobile Phones</option>
            <option value="TVs"<?php echo ($Product_data['category'] === 'TVs') ? ' selected' : '' ?>>TVs</option>
            <option value="Appliances"<?php echo ($Product_data['category'] === 'Appliances') ? ' selected' : '' ?>>Appliances</option>
        </select>
        </div>
        <div class="form-group col-md-5">
        <label for="producctQuantity">Quantity</label>
        <select class="form-control" id="quantity" name="quantity" value="<?php echo $Product_data['quantity'] ?>">
            <option value="">--Choose Quantity--</option>
            <option value="1"<?php echo ($Product_data['quantity'] === '1') ? ' selected' : '' ?>>1</option>
            <option value="2"<?php echo ($Product_data['quantity'] === '2') ? ' selected' : '' ?>>2</option>
            <option value="3"<?php echo ($Product_data['quantity'] === '3') ? ' selected' : '' ?>>3</option>
            <option value="4"<?php echo ($Product_data['quantity'] === '4') ? ' selected' : '' ?>>4</option>
            <option value="5"<?php echo ($Product_data['quantity'] === '5') ? ' selected' : '' ?>>5</option>
        </select>
        </div>
        <div class="form-group col-md-5">
            <label for="producctQuantity">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo $Product_data['price'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="productcreatedat">Product Created at</label>
            <input type="text" class="form-control-file" id="created_at" name="created_at"  value="<?php echo $Product_data['created_at'] ?>">
        </div>

  
  
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>

  </body>
</html>