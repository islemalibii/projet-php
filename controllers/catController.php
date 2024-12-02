<?php
include_once('../models/cat.php');
include_once('../database/config.php');

class catController extends Connexion {
    public function __construct() {
        parent::__construct();
    }

    public function insert(cat $c) {
        $query = "INSERT INTO cats (idrace, nameCat, ageCat, desCat, imgCat) VALUES (?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($c->getIdrace(), $c->getNamecat(), $c->getAgecat(), $c->getDescat(), $c->getImgcat());
        return $res->execute($aryy);
    }

    public function delete($idCat) {
        $query = "DELETE FROM cats WHERE idCat = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idCat));
    }

    public function listCat() {
        $query = "SELECT c.idCat, c.nameCat, c.ageCat, c.desCat, c.imgCat, b.idrace, b.namerace 
                  FROM cats c 
                  JOIN race b ON c.idrace = b.idrace";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCat($idCat) {
        $query = "  SELECT c.* , b.namerace FROM cats c 
                    JOIN race b ON c.idrace = b.idrace 
                    WHERE idCat = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idCat));
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public function modifyCat(cat $c) {
        $sql = "UPDATE cats 
                SET idrace = ?, nameCat = ?, ageCat = ?, desCat = ?, imgCat = ? 
                WHERE idCat = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array($c->getIdrace(), $c->getNamecat(), $c->getAgecat(), $c->getDescat(), $c->getImgcat(), $c->getIdcat()));
    }

    public function searchCat($idrace) {
        $query = "SELECT c.idCat, c.nameCat, c.ageCat, c.desCat, c.imgCat, b.idrace, b.namerace 
                  FROM cats c 
                  JOIN race b ON c.idrace = b.idrace 
                  WHERE b.idrace = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idrace));
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>