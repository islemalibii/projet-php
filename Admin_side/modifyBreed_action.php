<?php

require_once('../models/breed.php');
require_once('../controllers/breedController.php');
$bCtrl = new breedController();
$b = new breed();
$idrace = $_POST['idrace'];
$name=$_POST['namerace'];
$b->setIdrace($idrace);
$b->setNamerace($name);
$bCtrl->modifyBreed($b);
header('Location: breed.php');
?>