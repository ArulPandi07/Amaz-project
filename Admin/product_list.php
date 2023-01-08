<?php

require 'includes/db_func.php';
require 'includes/session_check.php';


$sql="select * from products order by id desc";
$result=  mysqli_query($con,$sql);
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">QuanTity</th>
      <th scope="col">Price</th>
      <th scope="col">Created at</th>
      <th scope="col">User Id</th>
      <th scope="col">Operations</th>
      
     
    </tr>
  </thead>
  <tbody>
    <?php

    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];  
        $name=$row['name'];
        $category=$row['category'];
        $quantity=$row['quantity'];
        $price=$row['price'];
        $created_at=$row['created_at'];  
        $user_id = $row['user_id'];
          
        
    ?>
        <tr>
          <th><?php echo $id; ?></th>
          <th><?php echo $name; ?></th>
          <td><?php echo $category; ?></td>
          <td><?php echo $quantity; ?></td>
          <td><?php echo $price; ?></td>
          <td><?php echo $created_at; ?></td>
          <td><?php echo $user_id; ?></td>
          
          
                    
          <td>
            <button class="btn btn-danger" type="button" onclick="confirmDelete('delete_user.php?delete_id=<?php echo $id ?>')">
              Delete
            </button>

            <button class="btn btn-primary" type="button" onclick="confirmUpdate('product_update.php?updateid=<?php echo $id ?>')">
              Update
            </button>
           
          </td>
        </tr>
    <?php
    }

}
?>

  </tbody>
</table>
<script>

  function confirmDelete(url) {
    if(window.confirm("Are you sure want to delete?")) {
      window.location.href = url
    }
  }

  function confirmUpdate(url) {
    if(window.confirm("Are you sure want to update?")) {
    window.location.href = url
    }
  }


</script>
</body>
</html>
