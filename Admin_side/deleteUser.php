<?php

require_once('../controllers/userController.php');
$uCtrl=new userController();
$id = $_GET['id'];
$res=$uCtrl->delete($id);

header('Location:adminsHome.php');


?>
