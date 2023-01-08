<?php

require 'includes/db_func.php';
require 'includes/session_check.php';

?>

<?Php
if (isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];

      $sql="delete from products where id=$id";
      $result = mysqli_query($con , $sql);
    
    if($result){
        echo "deleted successfully";
        header('location:product_list.php');
    
    }else{
        echo "Error:". $sql . "<br>". $conn->error;   

    }
}


?>
