<?php
require_once('../controllers/vetController.php');
$vCtrl=new vetController();
$id = $_GET['id'];
$vCtrl->delete($id);

header('Location:vet.php');


?>
