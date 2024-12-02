<?php

require_once('../controllers/breedController.php');
$bCtrl=new breedController();
$id = $_GET['id'];
$bCtrl->delete($id);

header('Location:breed.php');


?>



