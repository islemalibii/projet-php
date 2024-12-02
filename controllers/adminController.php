<?php
include_once('../models/admin.php') ;
include_once('../database/config.php');
class adminController extends Connexion{
    function __construct() {
        parent::__construct();
    }


    function verify($adminname,$password) {
        $query = "SELECT * FROM user where name = '$adminname' and password = '$password' ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    
    function getName($adminname) {
        $query = "SELECT * FROM user WHERE name = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($adminname));
        $array = $res->fetch();
        return $array;
    }


    
   
    

              


}

?>
