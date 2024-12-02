<?php

include_once("../controllers/adminController.php");
include_once("../models/admin.php");
session_start();
    $adminname = $_POST['name'];
    $password = $_POST['password'];

    $aCtrl = new adminController();
    $verify = $aCtrl->verify($adminname, $password);
    if ($verify -> rowCount() == 1) {
        $row = $aCtrl ->getName($adminname);
        $_SESSION ['userId']= $row['userId'];
        $_SESSION ['name'] = $adminname;
    
        if ($row['userId'] === 1 ){
            header('Location: adminsHome.php');
        }
    } else {
        echo"<script>alert('Invalid username or password. Please try again !!! ');</script>";
        echo $verify -> rowCount();
    }          

?>


