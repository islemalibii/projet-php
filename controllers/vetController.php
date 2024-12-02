<?php
include_once('../models/vet.php') ;
include_once('../database/config.php');
class vetController extends Connexion{
    function __construct() {
        parent::__construct();
    }

    function insert(vet $v){

    $query="insert into vet(nameVet,emailVet,phone,adresse)values(?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($v->getNamevet(),$v->getEmailVet(),$v->getPhone(),$v->getAdresse()) ;
    return $res->execute($aryy);

    }
    /*function getNamevet($nameVet) {
        $query = "SELECT * FROM vet WHERE nameVet = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($nameVet));
        $array = $res->fetch();
        return $array;
    }*/

    function delete($idVet) {
        $query = "delete from vet where idVet=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idVet));
    }
    function listVet(){
        $query = "select * from vet";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function getVet($idVet){
        $query="SELECT * FROM vet WHERE idVet = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idVet));
        $array= $res->fetch();
        return $array;
    }
   
    function modifyVet(vet $v)
    {
    $sql = "UPDATE vet SET  nameVet=? , emailVet=? , phone=? , adresse=?   WHERE idVet=?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($v->getNamevet(),$v->getEmailVet(),$v->getPhone(),$v->getAdresse(),$v->getIdvet()));
    }

 





 
}

?>
