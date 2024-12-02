<?php
require_once('../models/breed.php');
require_once('../database/config.php');
require_once('../controllers/breedController.php');

$breed=$_POST['namerace'];
$b=new breed($breed);
$bCtrl = new breedController();


$res = $bCtrl->insertBreed($b); 
header('Location:breed.php');

?>

