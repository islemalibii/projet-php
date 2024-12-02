<?php

require_once('../models/user.php');
require_once('../controllers/userController.php');
$uCtrl = new userController();
$u = new user();
$id = $_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$u->setId($id);
$u->setName($name);
$u->setEmail($email);
$uCtrl->modifyUser($u);
header('Location: adminsHome.php');
?>