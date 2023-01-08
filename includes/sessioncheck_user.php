<?php

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {

}
else {
    header("Location:user_login.php");
}
