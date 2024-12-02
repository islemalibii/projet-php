<?php

require_once('../controllers/catController.php');
$cCtrl=new catController();
$id = $_GET['id'];
$cCtrl->delete($id);

header('Location:cat.php');


?>

