<?php
include_once('../models/adopt.php');
include_once('../database/config.php');

class adoptController extends Connexion {
    public function __construct() {
        parent::__construct();
    }

    public function insert(adopt $a) {
        $query = "INSERT INTO adopt (userId, idCat, adresse, phone, why) VALUES (?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($a->getIduser(), $a->getIdcat(), $a->getAdresse(), $a->getPhone(), $a->getWhy());
        $res->execute($aryy);
        return $res;
    }

    
    public function list() {
        $query = "SELECT * FROM adopt a JOIN user u on a.userId=u.userId JOIN cats cat on a.idCat=cat.idCat";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAdoption($id) {
        $query = "SELECT * FROM adopt WHERE idAdopt = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $query = "DELETE FROM adopt WHERE idAdopt = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }



    /*function modifyAdoption(adopt $a)
    {
    $sql = "UPDATE adopt SET  userId=?, idCat=?, adresse=?, phone=?, why=?  WHERE idAdopt=?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($a->getIduser(),$a->getIdcat(), $a->getAdresse(), $a->getPhone(), $a->getWhy(), $a->getIdadopt()));
    }
*/
 
    
    
}


 
    
    

?>