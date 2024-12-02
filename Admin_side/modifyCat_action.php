<?php

require_once('../models/cat.php');
require_once('../controllers/catController.php');
$cCtrl = new catController();
$c = new cat();
$id = $_POST['idCat'];
$idr = $_POST['idrace'];
$name=$_POST['nameCat'];
$age=$_POST['ageCat'];
$des=$_POST['desCat'];
$img=file_get_contents($_FILES['imgCat']["tmp_name"]);
$c->setIdcat($id);
$c->setIdrace($idr);
$c->setNamecat($name);
$c->setAgecat($age);
$c->setDescat($des);
$c->setImgcat($img);
$cCtrl->modifyCat($c);
header('Location: cat.php');
?>