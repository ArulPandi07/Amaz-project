<?php

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {

}
else {
    header("Location:admin_login.php");
}
