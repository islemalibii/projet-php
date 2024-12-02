<?php
session_start();
require_once('../models/adopt.php');
require_once('../database/config.php');
require_once('../controllers/adoptController.php');

$idCat=$_POST['idCat'];
$userId=$_SESSION['userId'];
$ad=$_POST['adresse'];
$p=$_POST['phone'];
$w=$_POST['why'];


$a=new adopt($userId,$idCat,$ad,$p,$w);
$aCtrl = new adoptController();


$res = $aCtrl->insert($a); 
if($res){
    header('Location:home.php');    
}else{
    echo "ya laaaaaaaahweeeeeey";
}


?>

