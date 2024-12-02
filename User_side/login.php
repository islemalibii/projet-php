<?php


include_once("../controllers/userController.php");
include_once("../models/user.php");
session_start();
    $name = $_POST['name'];
    $password = $_POST['password'];

    $uCtrl = new userController();
    $verify = $uCtrl->verify($name, $password);
    if ($verify -> rowCount() == 1) {
        $row = $uCtrl ->getName($name);
        $_SESSION ['userId']= $row['userId'];
        $_SESSION ['name'] = $name;
    
        if ($row['userId'] === 1 ){
            echo"<script>alert('You don't have access !!! ');</script>";
        }else{
            header('Location: home.php ');
            exit;
        }
    }
    else {
        echo"<script>alert('Invalid username or password. Please try again !!! ');</script>";
        echo $verify -> rowCount();
    }  
     

?>


