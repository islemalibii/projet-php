<?php
require_once('../models/blog.php');
require_once('../database/config.php');
require_once('../controllers/blogController.php');

$tit=$_POST['title'];
$d=$_POST['descrip'];
$img=file_get_contents($_FILES['image']["tmp_name"]);
$bl=new blog($tit,$d,$img);
$blCtrl = new blogController();


$res = $blCtrl->insert($bl); 

header('Location:blog.php');

?>

