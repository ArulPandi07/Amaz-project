<?php

$con = mysqli_connect('localhost', 'root', '', 'amaz');

function insert($con, $product_data)
{
    $name = $product_data['name']; 
    $category = $product_data['category'];
    $quantity = $product_data['quantity'];
    $price = $product_data['price'];
    $created_at = $product_data['created_at'];
    $user_id = $product_data['user_id'];
    
    $sql = "insert into `products` (name, category, quantity, price,  created_at, user_id) values ('$name', '$category', '$quantity', '$price','$created_at','$user_id')";
    return mysqli_query($con , $sql);
}
   
function getEMP($con) {
    return mysqli_query($con, 'select * from user');
}
function getproductData($con, $id) {
    $sql = 'select * from `products` where id = ' . $id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

function getuser($con, $id) {
    $sql = 'select * from `userlogin`';
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}


?>