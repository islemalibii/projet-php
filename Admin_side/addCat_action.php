<?php
require_once('../models/cat.php');
require_once('../database/config.php');
require_once('../controllers/catController.php');

$breed=$_POST['race'];
$name=$_POST['nameCat'];
$age=$_POST['age'];
$des=$_POST['des'];
$pic=file_get_contents($_FILES['pic']["tmp_name"]);
$c=new cat($breed,$name,$age,$des,$pic);
$cCtrl = new catController();


$res = $cCtrl->insert($c); 

header('Location:cat.php');

?>

