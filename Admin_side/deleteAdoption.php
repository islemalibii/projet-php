<?php

require_once('../controllers/adoptController.php');
$aCtrl=new adoptController();
$id = $_GET['id'];
$aCtrl->delete($id);

header('Location:adoption.php');


?>

