<?php
require_once('../models/vet.php');
require_once('../database/config.php');
require_once('../controllers/vetController.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adresse=$_POST['adresse'];
$v=new vet($name,$email,$phone,$adresse);
$vCtrl = new vetController();


$res = $vCtrl->insert($v); 
header('Location:vet.php');

?>

