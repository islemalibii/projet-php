<?php

include_once("../controllers/userController.php");
include_once("../models/user.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    /*$exist = $user->getEmail();
    if ($exist===$email) {
        echo"<script>alert('This email already exists !!! ');</script>";
    }*/

    $u= new user($name, $email, $password);
    $uCtrl = new userController();
    $res = $uCtrl->insert($u);
    if ($res) {
        header('Location: home.php');
    } else {
        echo "Adding user failed !!!";
    }
?>
