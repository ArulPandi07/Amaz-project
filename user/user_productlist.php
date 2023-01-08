<?php

require 'includes/db_func.php';
require 'includes/sessioncheck_user.php';


$sql="select * from products_user";
$result=  mysqli_query($con,$sql);
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">QuanTity</th>
      <th scope="col">Price</th>
      <th scope="col">Created at</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $prod_id=$row['prod_id'];  
        $name=$row['name'];
        $category=$row['category'];
        $quantity=$row['quantity'];
        $price=$row['price'];
        $created_at=$row['created_at']; 
    
          
        
    ?>
        <tr>
          <th><?php echo $prod_id; ?></th>
          <th><?php echo $name; ?></th>
          <td><?php echo $category; ?></td>
          <td><?php echo $quantity; ?></td>
          <td><?php echo $price; ?></td>
          <td><?php echo $created_at; ?></td>
          <td>
          <button class="btn btn-primary" type="button" onclick="">
              Order
            </button>
          </td>
          
        
        </tr>
    <?php
    }

}
?>

  </tbody>
</table>

</body>
</html>
