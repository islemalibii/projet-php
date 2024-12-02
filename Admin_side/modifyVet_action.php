<?php

require_once('../models/vet.php');
require_once('../controllers/vetController.php');
$vCtrl = new vetController();
$v = new vet();
$id = $_POST['idVet'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adresse=$_POST['adresse'];
$v->setIdvet($id);
$v->setNamevet($name);
$v->setEmailVet($email);
$v->setPhone($phone);
$v->setAdresse($adresse);
$vCtrl->modifyVet($v);
header('Location: vet.php');
?>