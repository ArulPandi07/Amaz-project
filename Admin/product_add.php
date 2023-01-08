<?php

require 'includes/db_func.php';
require 'includes/session_check.php';

?>
<?php
    if(isset($_POST['submit']))
    {
            $result = insert($con, $_POST);
            if ($result == TRUE)
            {
             echo "Data Inserted Susessfully"; 
            }
            else
             {
               echo "Error in inserting values";    
             }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head><br>
<body>
<div class="container">

    <form method="post">
    <h5>PRODUCT DETAILS</h5>

    
        <div class="form-group col-md-5">
            <label for="productname">Product name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Product Name">
        </div>

        <div class="form-group col-md-5">
        <label for="producCategory">Category</label>
        <select class="form-control" id="category" name="category">
            <option value="">--Choose Category--</option>
            <option value="Jeans">Jeans</option>
            <option value="Shoes">Shoes</option>
            <option value="Mobile Phones">Mobile Phones</option>
            <option value="TVs">TVs</option>
            <option value="Appliances">Appliances</option>
        </select>
        </div>

    
        <div class="form-group col-md-5">
        <label for="producctQuantity">Quantity</label>
        <select class="form-control" id="quantity" name="quantity">
            <option value="">--Choose Quantity--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        </div>

        <div class="form-group col-md-5">
            <label for="producctQuantity">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter The Product Price">
        </div>

        <div class="form-group col-md-5">
            <label for="productcreatedat">Product Created at</label>
            <input type="text" class="form-control-file" id="created_at" name="created_at" placeholder="YYYY-MM-DD Hr-Mn-Ss">
        </div>

        <div class="form-group col-md-5">
            <label for="productcreatedat">User Id </label>
            <input type="text" class="form-control-file" id="user_id" name="user_id" value=" <?php echo " ".$_SESSION['user_email']; ?>" >
        </div>

        <button type="submit" id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
    
</form> 
</div>
</body>
</html>