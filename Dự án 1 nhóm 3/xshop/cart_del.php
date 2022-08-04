<?php
include 'header.php';
include 'pdo/pdo.php';

if(isset($_GET['id'])){
    !array_splice($_SESSION['mycart'], $_GET['id'], 1);
    header('location: cart.php');
    die;
}else{
    $_SESSION['mycart'] = [];
    header('location: cart.php');
    die;
}


?>